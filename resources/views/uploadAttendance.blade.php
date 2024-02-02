@extends('layouts.main')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Attendance</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Attendance</li>
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
                                            <!-- Include the file upload component here -->
                                            <form id="upload-form" action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" id="file-input" name="file" accept=".xlsx, .xls" style="display: none" />
                                                <button type="button" class="btn font-16 btn-primary" id="btn-new-event">
                                                    <i class="mdi mdi-plus-circle-outline"></i> Upload Attendance
                                                </button>
                                                <button type="submit" class="btn font-16 btn-success" style="margin-top: 30px;">Submit</button>
                                                <div id="file-upload-component"></div>
                                            </form>
                                        </div>
                                        <div class="row justify-content-center mt-5">
                                            <div class="col-lg-12 col-sm-6">
                                                <img src="assets/images/undraw-Attendance.svg" alt="" class="img-fluid d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xl-9 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="Attendance" style="min-height: 200px;"><h2 align="center" class="no_data {{($attendances == '')?'d-none':''}}" style="color: gray;margin-top: 200px">No data to Show</h2>
                                            <div class="card-body attendance_data {{($attendances =='' )?'':'d-none'}}">
                                                <div class="table-responsive">
                                                    <table class="table table-striped mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Employee Id</th>
                                                                <th>Schedule ID</th>
                                                                <th>Check In</th>
                                                                <th>Check Out</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="tbody">
                                                            @foreach ($attendances as $data)
                                                                <tr>
                                                                    <td>{{$data->id}}</td>
                                                                    <td>{{$data->employee_id}}</td>
                                                                    <td>{{$data->schedule_id}}</td>
                                                                    <td>{{$data->checkin}}</td>
                                                                    <td>{{$data->checkout}}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        document.getElementById('btn-new-event').addEventListener('click', function() {
            document.getElementById('file-input').click();
        });
        const formatDateTime = (timestamp) => {
            const date = new Date(timestamp * 1000); // Convert seconds to milliseconds
            const formattedDate = `${date.getMonth() + 1}/${date.getDate()}/${date.getFullYear()} ${date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}`;
            return formattedDate;
        };

        document.getElementById('upload-form').addEventListener('submit', async function(event) {
            event.preventDefault(); // Prevent default form submission behavior

            const fileInput = document.getElementById('file-input');
            const file = fileInput.files[0];

            if (!file) {
                alert('Please select a file.');
                return;
            }

            const formData = new FormData();
            formData.append('file', file);

            try {
                const response = await fetch('{{ route('upload') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData,
                });
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const data = await response.json();

                document.querySelector('.attendance_data').classList.remove('d-none');
                document.querySelector('.no_data').classList.add('d-none');

                const tableBody = document.querySelector('.tbody');
                tableBody.innerHTML = ''; // Clear existing rows
                data.attendances.forEach((attendance, index) => {
                    const row = `<tr>
                                    <th scope="row">${index + 1}</th>
                                    <td>${attendance.employee_id}</td>
                                    <td>${attendance.schedule_id}</td>
                                    <td>${formatDateTime(attendance.checkin)}</td>
                                    <td>${formatDateTime(attendance.checkout)}</td>
                                </tr>`;
                    tableBody.innerHTML += row;
                });
            } catch (error) {
                console.error('There was a problem with the fetch operation:', error);
            }
        });

</script>
@endsection
