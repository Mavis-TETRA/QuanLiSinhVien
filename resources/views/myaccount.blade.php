<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Thông Tin Tài Khoản') }}
        </h2>
        <style>
            .main-profile{
                display: flex;
                flex-direction: row;
                justify-content: center;
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

            img {
                border-radius: 30%;
                
            }

            .body-text {
                align-items: center;
                justify-content: center;
                margin-left: 10%;
            }

            .body-text span {
                font-size: 20px;
                font-weight: bold;
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div class="main-profile">
                    <div class="body">
                        <img src="{{url('drawble/avatar.jpg') }}" alt="image" style="width:300px; height:auto;">
                        
                    </div>
                    <div class="body body-text">

                        <span>Tên: {{Auth::user()->name}}</span>
                        <span>Email: {{ Auth::user()->email }}</span>
                        <span>Ngày Tạo: {{ Auth::user()->created_at }}</span>
                        <span>Ngày Cập Nhật: {{ Auth::user()->updated_at }}</span>
                        <a href="{{route('user.edit', Auth::user()-> id)}}" class="btn btn-warning" role="button">Chỉnh Sửa</a>
                        
                        {{-- <h3>Ngày sinh:</h3>
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
                        <span>{{$sinhvienSingle -> updated_at}}</span> --}}
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
