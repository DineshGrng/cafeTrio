<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>{{ $company->name }}</h1>
            </div>
            <div>
                <a href="{{ route('company.index') }}" class="btn btn-sm btn-primary">back</a>
            </div>
        </div>
        <div class="card-body">
            <div>
                <h1>logo</h1>
                <img src="{{ asset($company->logo) }}" height="140" alt="">
            </div>
            <div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="my-input">Company Name</label>
                            <input id="my-input" class="form-control" type="text" name=""
                                value="{{ $company->name }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="my-input" class="form-control" type="text" name=""
                                value="{{ $company->email }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="my-input">phone number</label>
                            <input id="my-input" class="form-control" type="text" name=""
                                value="{{ $company->phone1 }}" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="my-input">phone number</label>
                            <input id="my-input" class="form-control" type="text" name=""
                                value="{{ $company->phone2 }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="my-input">Address</label>
                            <input id="my-input" class="form-control" type="text" name="" value="{{ $company->address }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="my-textarea">Map Iframe</label>
                            <textarea id="my-textarea" class="form-control" name="" rows="3" disabled>{{ $company->map }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="my-textarea">Company Slogan</label>
                            <textarea id="my-textarea" class="form-control" name="" rows="3" disabled>{{ $company->slogan }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="my-input">facebook Link</label>
                            <input id="my-input" class="form-control" type="text" name=""
                                value="{{ $company->facebook }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="my-input">instagram Link</label>
                            <input id="my-input" class="form-control" type="text" name=""
                                value="{{ $company->instagram }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="my-input">whatsApp Link</label>
                            <input id="my-input" class="form-control" type="text" name=""
                                value="{{ $company->whatsApp }}" disabled>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
