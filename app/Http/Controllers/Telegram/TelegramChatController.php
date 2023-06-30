<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Orhanerday\OpenAi\OpenAi;
use App\Http\Controllers\Telegram\BaseTelegramController;
use App\Http\Controllers\User\UserController;
use App\Models\TGUser;
use Illuminate\Support\Str;

class TelegramChatController extends Controller
{
    public $client;
    public $baseTelegram;
    public $userController;
    public $bot_link;
    public $bot_url;
    public $update;
    public $commands;
    public $user_id;
    public $username;
    public $sub_details;
    public $user;

    public function __construct()
    {
        $this->bot_link = env("CHAT_TELEGRAM_BOT_LINK");
        $this->bot_url = "https://t.me/dast_pay_bot";
        $this->client = new OpenAi(env("OPENAI_API_KEY"));
        $this->baseTelegram = new BaseTelegramController($this->bot_link, "chat");
        $this->commands = ["/start"];
        $this->userController = new UserController();
    }

    public function getUpdates(Request $request)
    {
        $this->update = $this->baseTelegram->getUpdate($request);
        $this->user_id = $this->update->message->from->id;
        $this->sub_details = $this->userController->verifySub($this->user_id);
        $this->username = $this->update->message->from->username ?? "";
        $this->user = TGUser::updateOrCreate(["tg_id" => $this->user_id], ["link_code" => Str::uuid(), "tg_username" => $this->username ?? ""]);
        if (($this->update->message->text && $this->user->user_id) || $this->sub_details < 10) {
            $this->handleCommand($this->update->message->text);
        } else {
            $this->baseTelegram->sendRequestAuth($this->user->tg_id, $this->user->link_code);
        }
    }

    public function handleChat($text, $max_token = 1000)
    {


        $response = json_decode($this->baseTelegram->sendMessage($this->user_id, "Processing..."));

        $chat = $this->client->chat([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    "role" => "user",
                    "content" => $text
                ],
            ],
            'temperature' => 1.0,
            'max_tokens' => $max_token,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
        ]);
        $this->baseTelegram->deleteMessage($response->result->chat->id, $response->result->message_id);
        return  json_decode($chat)->choices[0]->message->content;
    }

    public function handleCommand($command)
    {
        $command_array = explode(" ", $command);
        $createQuestion = false;
        $response = "";

        try {
            if (count($command_array)) {

                switch ($command_array[0]) {
                    case "/start":
                        $this->baseTelegram->sendWelcome($this->user_id);
                        break;

                    case "/dastpay":
                        $this->baseTelegram->sendBotLink($this->user_id, $this->bot_url, "pay");
                        break;

                    case "/dast_products":
                        $data = array(
                            "message" => "Discover and Explore DAST Products and their Potential!
                        \n✅Experience the future of technology with DAST's groundbreaking products. 
                        \n✅From innovative blockchain solutions to AI-driven technologies, we empower individuals and businesses to thrive in the digital age.
                        \n✅Explore our product lineup and witness the transformative impact of AI/web3 technologies. Unlock new opportunities, enhance efficiency, and stay ahead of the curve with DAST",
                            "buttons" => [
                                ["Dast Dapp", "https://app.dast.tech"],
                                ["Dast Pay", URL("/dast-pay")],
                                ["Dast GPT", URL("/dast-chat")],
                                ["Dast Lab", URL("/dast-lab")],
                                ["Dast Armies", URL("/dast-armies")]
                            ]
                        );
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;



                    case "/dast_partners":
                        $data = array(
                            "message" => "Driving Innovation and Collaboration in the Web3 Ecosystem!\n
                        \n✅At DAST, we are proud to collaborate with a diverse network of partners who share our vision of harnessing the power of web3 technology. Together, we are pushing the boundaries of innovation and shaping the future.
                        \n✅Explore our esteemed partners, ranging from leading blockchain projects to cutting-edge tech companies. Join us on this transformative journey and unlock new possibilities in the web3 ecosystem. - NODO News, Vella Finance, Mobile Airtime, MKT, LokDon ",
                            "buttons" => [
                                ["DAST Partners", URL("/dast-partners")]
                            ]
                        );
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;

                    case "/dast_events":
                        $data = array(
                            "message" => "Unleash the Power of Web3 Technology at DAST Events!
                        \n✅Discover the latest trends, innovations, and opportunities in the web3 ecosystem. 
                        \n✅Connect with experts, participate in workshops, and explore real-world applications. 
                        \n✅Don't miss out on both virtual and physical DAST events! 
                        ",
                            "buttons" => [
                                ["Events", URL("/")]
                            ]
                        );
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;

                    case "/dast_jobs":
                        $data = array(
                            "message" => "Join a Dynamic Team and Unlock the Potential of Web3 Technology!'n
                        \n✅Are you ready to be part of a forward-thinking company at the forefront of technological innovation? DAST is seeking passionate and talented individuals for placement to help shape the future of web3 technology.
                        \n✅DAST campus Lead across Universities in Africa ",
                            "buttons" => [["Jobs", URL("/")]]
                        );
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;


                    case "/dast_airdrop":
                        $data = array(
                            "message" => "Don't Miss Out on Exclusive Airdrops: Join the DAST Community!
                        \n✅As part of our commitment to fostering a vibrant and engaged community, we regularly offer exclusive airdrops to our loyal members. Don't miss the chance to be rewarded with exciting tokens and benefits.
                        \n✅Stay tuned for upcoming airdrops and be part of the DAST community to unlock amazing opportunities. Join us today and be among the first to know about our exclusive airdrop events.
                        \n#DASTCommunity #ExclusiveAirdrops #Rewards",
                            "buttons" => [["Airdrops", URL("/")]]
                        );
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;

                    case "/community":
                        $data = array(
                            "message" => "
                        \n📣 Hey there DASTGPT Bot users!  
                        \n👋 Looking to connect with like-minded individuals who share your interest in DAST? 
                        \n🌟 Join our thriving DAST communities today!  
                        \n🌐 Share insights, tips, and challenges with fellow enthusiasts who understand your passion.  
                        \n🤝 Together, let's explore the world of DAST ecosystem and take our skills and networks to new heights!  
                        \n🚀 #JoinDASTCommunities Today
                        ",
                            "buttons" => [
                                ["🔗Join DAST Telegram Channel", "https://t.me/dast_announcement"],

                                ["🔗Join DAST Telegram Group", "https://t.me/dastofficialtg"],

                                ["🔗Follow DAST on Linkedin", "https://www.linkedin.com/company/dast-tech/"],

                                ["🔗Follow DAST on Twitter ", "https://twitter.com/DastCommunity?s=09"],

                                ["🔗Follow DAST on Facebook", "https://www.facebook.com/dastofficial1?mibextid=ZbWKwL"],

                                ["🔗Upvote and Review @ Nodo News", "https://nodo.xyz/discover/dast-technology"]
                            ]
                        );
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;

                    default:
                        if ($this->sub_details["active_sub"] || $this->sub_details["totalrequests"] < 10) {
                            $createQuestion = true;
                            $response = $this->handleChat($command);
                            $this->baseTelegram->sendMessage($this->user_id, $response);
                        } else {
                            $this->baseTelegram->sendMessage($this->user_id, "Sorry your have exhausted your free text for today. To enjoy unlimited usage please subscribe");
                        }
                }

                // if ($command_array[0] == "/start") {
                //     $this->baseTelegram->sendWelcome($this->user_id);
                // } else if ($command_array[0] == "/dastpay") {
                //     $this->baseTelegram->sendBotLink($this->user_id, $this->bot_url, "pay");
                // } else {
                //     if ($this->sub_details["active_sub"] || $this->sub_details["totalrequests"] < 10) {
                //         $createQuestion = true;
                //         $response = $this->handleChat($command);
                //         $this->baseTelegram->sendMessage($this->user_id, $response);
                //     } else {
                //         $this->baseTelegram->sendMessage($this->user_id, "Sorry your have exhausted your free text for today. To enjoy unlimited usage please subscribe");
                //     }
                // }
            }
        } catch (\Throwable $th) {
        } finally {
            if ($createQuestion) {
                $this->user->chats()->create(["t_g_user_id" => $this->user_id, "questions" => $command, "response" => $response]);
            }
        }
    }
}
