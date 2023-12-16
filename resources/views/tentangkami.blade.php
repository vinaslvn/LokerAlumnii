@extends('dashboardadmin')
@section('content')
    
    <!-- Page Loader -->
            <div class="container-fluid">            
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive ms-3 me-3">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <a href="{{ url ('tentangkami/add')}}"><button class="btn btn-primary margin-right mt-3" type="submit">+ Tambah Data</button></a>
                                        <thead>
                                            <tr class="tet-center">
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    No
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Tentang Kami
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($tentangkamis as $key => $item)
                                            <!-- 1 -->
                                           <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                               <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                  {{$key+1}}
                                               </td>
                                               <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                  {{$item->tentangkami}}
                                               </td>
                                               <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <a href="/tentangkami/hapus/{{$item->id}}"><i class="fas fa-trash-alt"></i></a>
                                                <a href="/tentangkami/edit/{{$item->id}}"><i class="fas fa-edit"></i></a>
                                               </td>
                                           </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

   


<!-- Jquery Core Js --> 
<script src="data/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="data/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="/data/assets/bundles/datatablescripts.bundle.js"></script>
<script src="/data/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="/data/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="/data/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="/data/assets/vendor/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="/data/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="/data/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="/data/assets/js/theme.js"></script><!-- Custom Js --> 
<script src="/data/assets/js/pages/tables/jquery-datatable.js"></script>

<!-- Mirrored from www.wrraptheme.com/templates/bigbucket/html/light/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 11:28:41 GMT -->
</html>
@endsection