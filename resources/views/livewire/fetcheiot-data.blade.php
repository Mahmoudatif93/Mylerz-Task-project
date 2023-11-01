<div class="row">
    <!-- Fetch all records -->


    <div class="col text-center">
        <strong style="font-size: large;font-style: normal;"> For Real Time Data Press </strong> <button wire:click="refreshData" class="btn btn-info btn-lg border border-primary mb-3">Refresh Data</button>
    </div>
    <div class="col-12">
        @if(!empty($records))
        <table id="" class="table table-bordered table-hover">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>temperature</th>
                    <th>humidity</th>
                    <th>created_at</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>temperature</th>
                    <th>humidity</th>
                    <th>created_at</th>
                </tr>
            </tfoot>
            <tbody>

                @foreach($records as $record)
                <tr>

                    <td>{{ $record->id}}</td>
                    <td>{{ $record->temperature}}</td>
                    <td>{{ $record->humidity}}</td>
                    <td>{{ $record->created_at}}</td>
                </tr>
                @endforeach


            </tbody>
        </table> {{ $records->links() }}
        @endif

    </div>

</div>