<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Thông Tin Tài Khoản') }}
        </h2>
        <style>
            .main-profile{
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                border-left-width: 1px;
            }
            .body {
                display: flex;
                flex-direction: column;

            }
            .button {
                display: flex;
                flex-direction: row;
                margin-top: 20px;
            }

            .button button {
                margin-right: 20px;

            }
          

            a:hover {
                color: white;
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div class="main-profile">
                        <div class="body">
                            <img src="{{url('drawble/person.jpg')}}" style="width:300px; height:auto;" alt="">
                            <span>MSSV:{{$sinhvienSingle -> MaSV}}</span>
                            <span>{{$sinhvienSingle -> FirthName}}{{$sinhvienSingle -> LastName}}</span>
                            <span>tranminhtan4869@gmail.com</span>
                        </div>
                        <div class="body">
                            <h3>Ngày sinh:</h3>
                            <span>{{$sinhvienSingle -> Birth}}</span>
                            <h3>Giới Tính</h3>
                            <span>{{$sinhvienSingle -> Gender}}</span>
                            <h3>Địa Chỉ</h3>
                            <span>{{$sinhvienSingle -> Address}}</span>
                            <h3>Nơi Sinh</h3>
                            <span>{{$sinhvienSingle -> BirthPlace}}</span>
                            <h3>Số Điện Thoại</h3>
                            <span>{{$sinhvienSingle -> PhoneNumber}}</span>
                            <h3>Căn Cước Công Dân</h3>
                            <span>{{$sinhvienSingle -> CitizenIdentityCard}}</span>
                            <h3>Tình Trạng Học</h3>
                            <span>{{$sinhvienSingle -> Status}}</span>
                            <h3>Ngày Tạo</h3>
                            <span>{{$sinhvienSingle -> created_at}}</span>
                            <h3>Ngày Cập Nhật</h3>
                            <span>{{$sinhvienSingle -> updated_at}}</span>
                            
                            <form action="{{route('sinhvien.destroy', $sinhvienSingle-> id)}}" method="POST">

                                @hasanyrole('Admin')
                                <td><a href="{{route('sinhvien.edit', $sinhvienSingle-> id)}}" class="btn btn-warning" role="button">Sửa</a></td>
                                @else
                                <td></td>
                                @endhasanyrole
                                
                                @hasanyrole('Admin')
                                @csrf
                                @method('DELETE')
                                <td><button type="submit" class="btn btn-danger" style="background-color: #DC3545;">Xóa</button></td>
                                @else
                                <td></td>
                                @endhasanyrole
                              </form>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
