<div class="container pt-5">
    <div class="row pt-5">
        <div class="col-md-8 p-5 text-center w-100 border">

            <h2>Account funding</h2>
            <form wire:submit.prevent="createPayment">
                <div class="row">
                    <div class="col-12 mt-3">
                        <label for="l"></label>
                        <select wire:model="currency" id="" class="alert alert-muted w-100">
                            <option value="">Choose currency</option>
                           @foreach($currencies as $curr)
                           <option value="{{$curr->id}}">{{strtoupper($curr->symbol)}}</option>
                           @endforeach
                        </select>
                        @error("currency")
                        <div class="aler alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <input wire:model="amount" type="number" class="alert alert-muted w-100" placeholder="amount">

                        @error("amount")
                        <div class="aler alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-muted w-25 btn-primary p-3">Proceed</button>
                </div>
            </form>
        </div>
    </div>
</div>