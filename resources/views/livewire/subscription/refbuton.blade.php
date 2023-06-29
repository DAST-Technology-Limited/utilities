<!DOCTYPE html>
<html>
<head>
  <title>Referral Link</title>
  <style>
    .referral-link-container {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .referral-link-input {
      flex-grow: 1;
      margin-right: 10px;
    }

    .referral-link-copy {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
      background-color: #C6155C;
    }
  </style>
  <script>
    function copyToClipboard() {
      var copyText = document.getElementById("referral-link-input");
      copyText.select();
      copyText.setSelectionRange(0, 99999); // For mobile devices
      document.execCommand("copy");
      alert("Referral link copied to clipboard!");
    }
  </script>
</head>
<body>
  <div class="referral-link-container alert alert-primary w-100">
    <input type="text" id="referral-link-input" class="w-75" value="{{URL('/')}}/register/?ref_id={{Auth::user()->ref_id}}" readonly>
    @if(Auth::user()->ref_id)
    <button class="referral-link-copy btn btn-primary" onclick="copyToClipboard()">Copy</button>
    @else
    <button wire:click="GenerateLink()" class="btn btn-primary">Get a link</button>
    @endif
  </div>
</body>
</html>
