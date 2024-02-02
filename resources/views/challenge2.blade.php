@extends('layouts.main')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Find Duplicates</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-grid">
                                            <input type="text" id="array-input" class="form-control" placeholder="Enter comma-separated array">
                                            <button class="btn font-16 btn-success" style="margin-top: 30px;" onclick="findDuplicates()">Submit</button>
                                        </div>
                                        <div class="row justify-content-center mt-5">
                                            <div class="col-lg-12 col-sm-6">
                                                <img src="assets/images/undraw-Attendance.svg" alt="" class="img-fluid d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="card">
                                    <div class="card-body" id="duplicates-container">
                                       
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> 
                        <div style='clear:both'></div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Dason.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center p-3">
            <h5 class="m-0 me-2">Theme Customizer</h5>
            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>
        
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->
@endsection

@section('page-script')
    {{-- All the js of this page --}}
    <script>
        function findDuplicates() {
            const input = document.getElementById('array-input').value;
            const array = input.split(',').map(item => item.trim());
            const uniqueValues = new Set();
            const duplicateValues = [];

            array.forEach(item => {
                if (uniqueValues.has(item)) {
                    duplicateValues.push(item);
                } else {
                    uniqueValues.add(item);
                }
            });

            const duplicatesContainer = document.getElementById('duplicates-container');
            duplicatesContainer.innerHTML = ''; // Clear existing content

            if (duplicateValues.length > 0) {
                const list = document.createElement('ul');
                duplicateValues.forEach(value => {
                    const listItem = document.createElement('li');
                    listItem.textContent = value;
                    list.appendChild(listItem);
                });
                duplicatesContainer.appendChild(list);
            } else {
                duplicatesContainer.textContent = 'No duplicate values found.';
            }
        }
    </script>
@endsection
