<x-app-layout title="Raport Chart">
    @push('style')
    @endpush
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Laporan</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Chart</a></li>
        </ol>
    </div>

    <div class="mb-1">
        <form action="" method="get" class="row g-3">
            <div class="d-flex justify-content-end align-items-center flex-wrap">
                <div class="col-auto">
                    <input type="text" name="keyword" class="form-control input-default" value=""
                        placeholder="Enter a Keyword">
                </div>
                <div class="col-auto">
                    <select name="User_Name" id="User_Name"
                        class="form-nice-select me-sm-2 default-select form-control wide">
                        <option value="">-- Select User --</option>
                        @if (!empty($resultGetUsersName))
                        @foreach ($resultGetUsersName as $User_Name)
                        <option value="{{ $User_Name->id }}">{{ $User_Name->name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="col-xl-6 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan</h4>
                </div>
                {{-- {{ dd($messagesArray) }} --}}
                <div class="card-body">
                    <canvas id="barChart_1"></canvas>
                    <div id="container"></div>
                    <div style="color: rgb(206, 206, 206)"></div>
                </div>
            </div>
        </div>
    </div>

    @push('JavaScript')
    <script>
        // var arr = @json($messagesArray);
        var arr = {!! json_encode($messagesArray) !!}
        var arrStringName = arr.map(obj => obj.name);
        var arrStringNilaiKinerjaTotal = arr.map(obj => obj.NilaiKinerjaTotal);
        var arrStringStandartKinerjaTotal = arr.map(obj => obj.StandartKinerjaTotal);
        var arrStringresult_capaian_total = arr.map(obj => obj.result_capaian_total);
        var arrStringPredikat = arr.map(obj => obj.predikat);

        // console.log(arr);
        // console.log(arrStringName);
        // console.log(arrStringNilaiKinerjaTotal);
        // console.log(arrStringStandartKinerjaTotal);
        // console.log(arrStringresult_capaian_total);
        // console.log(arrStringPredikat);
    </script>

    <!-- Chart ChartJS plugin files -->
    <script src="{{ asset('Assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('Assets/js/plugins-init/chartjs-aggregat.js') }}"></script>
    @endpush
</x-app-layout>
