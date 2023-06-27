<style>
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .pagination .pagination-link {
        padding: 5px 10px;
        margin: 0 5px;
        background-color: #eee;
        color: #333;
        border-radius: 3px;
        text-decoration: none;
    }

    .pagination .pagination-link:hover {
        background-color: #ccc;
    }

    .pagination .pagination-link.active {
        background-color: #007bff;
        color: #fff;
    }
</style>

<div class="container-fluid pt-5 mt-5">
    <div class="row">
        <div class="col-md-12 w-100">
            <h1>Transaction History</h1>
            <table class="table border w-100" style="display: block; overflow-x: auto; white-space: nowrap;">
                <thead>
                    <th>#</th>
                    <th>Description</th>
                    <th>Amount (N)</th>
                    <th>Date</th>
                    <th>Type</th>
                </thead>
                @foreach($histories as $history)
                <tr class="alert {{$history->type == 'credit' ? 'alert-success' : 'alert-danger'}}">
                    <td>{{$loop->index + 1}}</td>
                    <td>{{ $history->desc }}</td>
                    <td>N{{ $history->amount }} </td>
                    <td>{{ $history->created_at }}</td>
                    <td>{{ ucfirst($history->type) }}</td>
                </tr>
                @endforeach
            </table>
            @if ($histories->hasPages())
            <div class="pagination-wrapper">
                {{ $histories->links() }}
            </div>
            @endif


        </div>
    </div>
</div>