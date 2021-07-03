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
                <li><span>State</span></li>
                <!--<li><span>Default</span></li> -->
            </ol>

            <a class="" data-open=""></a>
        </div>
    </header>

    <!-- start: page -->

    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="javascript:void(0)" onclick="updateProject()"
                    style="width:106px !important; height:39px !important;" class="btn btn-primary"> <i
                        class="glyphicon glyphicon-plus"></i>Add State</a>

            </div>

            <h2 class="card-title">State</h2>
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
                        <th>State</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $datas)
                    <tr id="sid{{$datas->id}}">
                        <td>
                            {{$datas->state_name}}
                        </td>
                        <td>{{$datas->country_name}}</td>
                        <td class="actions">

                            <a href="javascript:void(0)" onclick="editCountry({{$datas->id}})"
                                class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>

                            <a  href="javascript:void(0)" onclick="delete_country({{$datas->id}})" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal123" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit State</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
           
				<form id="update_state">
				<input type="hidden" id="id">
				<div class="form-group">
					<label for="">State</label>
					<input type="text" id="state1" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Country</label>
					<select id="country1" class="form-control" required>
			
					</select>
				</div>
			
			</div>
       
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update State</button>
            </div>
		</form>
        </div>
    </div>
</div>















{{--    ----------------------------------------------------------End Edit Model   --------------- -------------------   --}}

{{--    -----------------------ADD Model    -------------------   --}}


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add State</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="countryEditForm">
                <div class="modal-body">

                    <div class=" form-group has-feedback">

                        <label>State</label>

                        <input type="text" class="form-control has-feedback-left" id="state_name"
                            placeholder=" &nbsp Country" required>

                    </div>
                    <div class="modal-body">

                        <div class=" form-group has-feedback">

                            <label>Country</label>
                            <select id="country_id" class="form-control has-feedback-left" required>
                                <option value="" disbales>Select a country</option>
                                @foreach($show as $shows)
                                <option value="{{$shows->id}}">{{$shows->country_name}}</option>
                                @endforeach
                            </select>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add State</button>
                    </div>
            </form>
        </div>
    </div>
</div>

{{--    -----------------------End ADD Model    -------------------   --}}










@endSection

@section('add')
{{--    ----------------------- ADD jquery    -------------------   --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    function updateProject() {
        $("#exampleModal").modal('toggle');
    }

    $("#countryEditForm").submit(function (e) {
        e.preventDefault();


        let country_id = $("#country_id").val();
        let state_name = $("#state_name").val();
        $.ajax({
            url: "{{route('state.create')}}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {

                country_id: country_id,
                state_name: state_name


            },
            success: function (response) {
				
                swal("State Create!", "", "success");
                $("#datatable-checkbox tbody").prepend(`<tr id="sid${response[0].id}">
			  <td>${response[0].state_name}</td>
			  <td>${response[1].country_name}</td>
			  <td>
													<a href="javascript:void(0)" onclick="editCountry(${response[0].id})" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
										
												<a  href="javascript:void(0)" onclick="delete_country(${response[0].id})" class="on-default remove-row"><i class="far fa-trash-alt"></i></a> </td> </tr>`);

                $("#exampleModal").modal('toggle');
                $("#countryEditForm")[0].reset();
            }
        });
    });

</script>





@endsection



{{--    ----------------------- End ADD jquery    -------------------   --}}

{{--    -----------------------------------------------------------------  Edit jquery  -----------------------------  -------------------   --}}


@section('edit')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    function editCountry(id) {


        $.get('/admin/state/edit_state/' + id, function (data,show) {
			var op = "";

            var y=data[1];

	
                                         
                            
						
			 for(i=0; i < data[1].length; i++){
				 if(data[0].country_id == y[i].id){
				op += '<option value="' + y[i].id + '" selected>' + y[i].country_name + '</option>';
				 }else{
					op += '<option value="' + y[i].id + '">' + y[i].country_name + '</option>';
				 }
			 }
			 
			 $('#country1').html(op);
			 $('#state1').val(data[0].state_name);
			 $('#id').val(data[0].id);
			 $("#exampleModal123").modal('toggle');

        })
    }


    $("#update_state").submit(function (e) {
        e.preventDefault();

        let id = $("#id").val();
		
		let state = $('#state1').val();
		
        let country_id = $("#country1").val();
		


         $.ajax({
             url:"/admin/state/update",
             type:"PUT",
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
            data:{
                id:id,
                country_id:country_id,
				state:state



             },
             success:function(response){
				 
                swal("State Edit!", "", "success");
                $('#sid' + response[0].id +' td:nth-child(1)').text(response[0].state_name);
				$('#sid' + response[0].id +' td:nth-child(2)').text(response[1].country_name);
                  $("#exampleModal123").modal('toggle');
                  $("#update_state")[0].reset();
                     }
         });
    });

</script>




@endsection
{{--    ------------------------------------------- End eidt jquery   ----------------- -------------------   --}}


{{--    ----------------------- --------------------------Delete jquery    -------------------   --}}








@section('delete')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
function delete_country(id){
  if(confirm("Do you want to delete this record")){
            
            $.ajax({
                url:'/admin/state/delete/'+id,
                type:'DELETE',
                headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },

                $data:{
                    _token : $("input[name=_token]").val()
                },
                success:function(response){
                  swal("State Delete", "", "warning");
                    $("#sid"+id).remove();
                }
            });
       }
   }






</script>
@endsection
{{--    ----------------------- End Delete jquery    -------------------   --}}

