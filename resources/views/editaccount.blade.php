<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chỉnh Sửa Thông Tin Tài Khoản') }}
        </h2>
        <style>
          /* Chrome, Safari, Edge, Opera */
          input::-webkit-outer-spin-button,
          input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
          }
          
          /* Firefox */
          input[type=number] {
            -moz-appearance: textfield;
          }

          #submit:hover {
            box-shadow: 5px 5px 5px #28a745;
          }
          </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h2 class="font-semibold text-xl text-gray-800 leading-tight">Chỉnh Sửa Thông Tin Tài Khoản</h2>
                  <p>Tại đây có thể chỉnh sửa thông tin tài khoản, chúng ta sử dụng <code>trang này</code> để chỉnh sửa thông tin sinh một tài khoản :</p>

                  <form action="{{route('user.update', $user-> id)}}" method="POST" class="was-validated" style="margin-top: 20px;">
                    {{-- <div class="form-group">
                      <label for="">:</label>
                      <input type="text" class="form-control" id="" placeholder="Enter " name="" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div> --}}
                    @csrf
                    @method('PUT')
                    <input type="text" hidden value="">
                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="name">Tên/Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Nhập mã số/Enter code" name="name" value="{{$user-> name}}" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div>
                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="email">Email:</label>
                      <input type="text" class="form-control" id="email" placeholder="Nhập họ/Enter firth name" name="email" value="{{$user-> email}}" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div>

                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="image">Ảnh nền/Avatar:</label>
                      <input type="file" class="form-control-file border">
                    </div>
                    

                    <div class="form-group" style="  display: flex;
                    flex-direction: row;
                    justify-content: flex-end;">
                      <input type="submit" id="submit" style="background-color: #28A745;padding: 15px;
                        border-radius: 10px;
                      color: white;" value="Submit Button">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
