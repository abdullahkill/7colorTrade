@extends('admin/layout/layout')
@section('content')


<!-- start: header -->

<!-- end: header --> 

<!-- end: sidebar -->

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Admin Dasboard</h2>

        <div class="right-wrapper text-right" style="margin-right:50px">
            <ol class="breadcrumbs">
                <li>
                    <a href="/admin/dashboard">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>View 7 Colour Betting</span></li>
                <!--<li><span>Default</span></li> -->
            </ol>

            <a class="" data-open=""></a>
        </div>
    </header>

    <!-- start: page -->

    <section class="card">
        <header class="card-header">
            <div class="card-actions">

            </div>
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            <h2 class="card-title">View 7 Colour Betting</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">

                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped mb-0" id="datatable-checkbox">
                <thead>
                    <tr>
                        <th>Period</th>
                        <th>Color</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $datas)
                    <tr id="sid{{$datas->id}}">
                        <td>
                            {{$datas->auto_id}}
                        </td>
                        <td>
                            @php
                            $edit =
                            DB::table('color_svbettings')->join('colors','color_svbettings.color_id','=','colors.id')->select('color_svbettings.*',
                            'colors.color_code')->where('svbetting_id',$datas->id)->get();


                            @endphp
                            <div style="display:flex">
                                @foreach ($edit as $edits)

                                <div
                                    style="background-color:{{$edits->color_code}}; height:20px; width:20px; border-radius:50%;">
                                    <center style="color:white"> {{$edits->number}} </center>
                                </div> &nbsp &nbsp

                                @endforeach
                            </div>
                        </td>
                        <td>
                            @if($datas->status==0)
                            <a href="javascript:void(0)" onclick="activebet({{$datas->id}})"
                                class="btn btn-primary btn-sm"> Active Your Bet</a>
                            @else
                            <p>Active </p>
                            @endif
                        </td>
                        <td class="actions">
                            @if($datas->status==0)
                            <a href="/sevenColor/betting/edit/{{$datas->id}}"
                                class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>

                            <a href="javascript:void(0)" onclick="delete_country({{$datas->id}})"
                                class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
                            @else
                            <p>Active </p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!-- end: page -->
</section>
</div>









{{--    --------------------------------------------- edit Model  ------------------  -------------------   --}}


















{{--    ----------------------------------------------------------End Edit Model   --------------- -------------------   --}}










@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function activebet(id) {
        $.get('/sevenColor/betting/active/' + id, function (data) {
            if (data) {
                $('#sid' + data.id + ' td:nth-child(3)').html(`<p>Active</p>`);
                $('#sid' + data.id + ' td:nth-child(4)').html(`<p>Active</p>`);

            }

        })
    }

</script>

@endsection


{{--    -----------------------------------------------------------------  Edit jquery  -----------------------------  -------------------   --}}

@section('delete')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
function delete_country(id){
  if(confirm("Do you want to delete this record")){
            
            $.ajax({
                url:'/sevenColor/betting/delete/'+id,
                type:'DELETE',
                headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },

                $data:{
                    _token : $("input[name=_token]").val()
                },
                success:function(response){
                  swal("Betting Delete", "", "warning");
                    $("#sid"+id).remove();
                }
            });
       }
   }






</script>
@endsection

