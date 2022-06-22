<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Thêm Mới') }}
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
                  <h2 class="font-semibold text-xl text-gray-800 leading-tight">Thêm Mới Sinh Viên</h2>
                  <p>Tại đây có thể thêm mới sinh viên, chúng ta sử dụng <code>trang này</code> để thêm mới một sinh viên quản lý sau này:</p>



                  <form action="{{route('sinhvien.store')}}" method="POST" class="was-validated" style="margin-top: 20px;">
                    {{-- <div class="form-group">
                      <label for="">:</label>
                      <input type="text" class="form-control" id="" placeholder="Enter " name="" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div> --}}
                    @csrf
                    <input type="text" hidden value="">
                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="codestudent">Mã số sinh viên/No.:</label>
                      <input type="text" class="form-control" id="codestudent" placeholder="Nhập mã số/Enter code" name="MaSV" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div>
                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="firtname">Họ/Firth Name:</label>
                      <input type="text" class="form-control" id="firtname" placeholder="Nhập họ/Enter firth name" name="FirthName" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div>
                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="lastname">Tên/Last Name:</label>
                      <input type="text" class="form-control" id="lastname" placeholder="Nhập tên/Enter last name" name="LastName" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div>

                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="birth">Ngày Sinh/Birth Day:</label>
                      <input type="date" class="form-control" id="birth" name="Birth" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div>

                    <div class="radio-gender">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="gender">Giới Tính/Gender:</label>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="Gender" value="Nam">Nam
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="Gender" value="Nữ">Nữ
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="address">Địa Chỉ/Address:</label>
                      <textarea class="form-control" rows="3" id="address" name="Address" required></textarea>
                    </div>

                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="birthplace">Nơi Sinh/Birth Place:</label>
                      <textarea class="form-control" rows="3" id="birthplace" name="BirthPlace" required></textarea>
                    </div>
                    
                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="email">Email:</label>
                      <input type="text" class="form-control" id="email" placeholder="Nhập email/Enter email" name="Email" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div>

                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="phonenumber">Số Điện Thoại/Phone Number:</label>
                      <input type="number" class="form-control" id="phonenumber" placeholder="Nhập số điện thoại/Enter phone number" name="PhoneNumber" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div>

                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="citizenidentitycard">Căn Cước Công Dân/Citizen identity card:</label>
                      <input type="number" class="form-control" id="citizenidentitycard" placeholder="Nhập số căn cước công dân/Enter citizen identity card" name="CitizenIdentityCard" required>
                      <div class="valid-feedback">Đầy đủ thông tin.</div>
                      <div class="invalid-feedback">Thiếu thông tin, vui lòng nhập đủ.</div>
                    </div>

                    <div class="form-group">
                      <label for="Status">Tình Trạng/Status:</label>
                      <select class="form-control" id="Status" name="Status">
                        <option value="Đang học">Đang học</option>
                        <option value="Tốt Nghiệp">Tốt Nghiệp</option>
                        <option value="Tạm Hoãng">Tạm Hoãng</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label class="font-semibold text-l text-gray-800 leading-tight" for="cardimage">Ảnh Thẻ/Card image:</label>
                      <input type="file" class="form-control-file border" name="Image" id="cardimage">
                    </div>

                    <div class="form-group" style="  display: flex;
                    flex-direction: row;
                    justify-content: flex-end;">
                      <input type="submit" id="submit" style="background-color: #28A745;padding: 15px;
                        border-radius: 10px;
                      color: white;" value="Lưu thông tin">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
