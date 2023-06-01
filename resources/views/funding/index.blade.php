@extends("layouts.dashboard")

@section("content")

<div class="container pt-5">
    <div class="row pt-5">
        <div class="col-md-8 p-5 text-center w-100 border">

            <h2>Account funding</h2>
            <form>
                <div class="row">
                    <div class="col-12">
                        <label for="l"></label>
                        <select name="currency" id="" class="alert alert-muted w-100">
                            <option value="ngn">Naira</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <input type="number" class="alert alert-muted w-100" placeholder="amount">
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-muted w-25 btn-primary p-3">Proceed</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection