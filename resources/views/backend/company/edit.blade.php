<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Edit Company</h1>
            </div>
            <div>
                <a href="{{ route('company.index') }}" class="btn btn-sm btn-primary">back</a>
            </div>
        </div>
        <div class="card-body">
           <form action="{{ route('company.update', $company->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="name">Company Name <span class="text-danger">*</span></label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="Company Name" value="{{ $company->name }}" required>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="email">Company email <span class="text-danger">eg.example@gmail.com</span></label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="eg.example@gmail.com" value="{{  $company->email }}" required>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="address">Company address <span class="text-danger">*</span></label>
                        <input id="address" class="form-control" type="text" name="address" placeholder="Company address" value="{{  $company->address }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone1">Company phone1 <span class="text-danger">*</span></label>
                        <input id="phone1" class="form-control" type="text" name="phone1" placeholder="company number" value="{{  $company->phone1 }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone2">Company phone2 <span class="fs-5">(not mandatory)</span></label>
                        <input id="phone2" class="form-control" type="text" name="phone2" placeholder="secondary number" value="{{  $company->phone2 }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="map">Google Map <span class="text-warning">Ifame</span></label>
                        <textarea id="map" class="form-control" name="map" rows="3">{{  $company->map }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="slogan">Company slogan</label>
                        <textarea id="slogan" class="form-control" name="slogan" rows="3">{{  $company->slogan }}</textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="facebook">Facebook Link <span class="fs-5">(not mandatory)</span></label>
                        <input id="facebook" class="form-control" type="text" name="facebook" value="{{  $company->facebook }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="instagram">Instagram Link <span class="fs-5">(not mandatory)</span></label>
                        <input id="instagram" class="form-control" type="text" name="instagram" value="{{  $company->instagram }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="youtube">Youtube Link <span class="fs-5">(not mandatory)</span></label>
                        <input id="youtube" class="form-control" type="text" name="youtube" value="{{  $company->youtube }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="whatsApp">whatsApp number</label>
                        <input id="whatsApp" class="form-control" type="text" name="whatsApp" value="{{  $company->whatsApp }}">
                    </div>
                </div>
                <div class="col-md-12 d-flex">
                   <div class="form-group">
                    <label for="logo">Company Logo</label>
                    <input id="logo" class="form-control-file" type="file" name="logo">
                   </div>
                   <div class="">
                    <img src="{{ asset( $company->logo) }}" width="220" alt="">
                   </div>
                </div>
                <button type="submit" class="btn btn-lg btn-success">Save Record</button>
            </div>

           </form>
        </div>
    </div>
   </x-app-layout>
