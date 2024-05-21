<x-frontend-layout>
    <section>
        <div class="container p-3">
            <div class="row">
              <div class="col-lg-8 m-auto">
                <div class="card bg-secondary">
                  <div class="card-title">
                    <h2 class="text-center py-2"> Send Us Message</h2>
                    <hr>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('feedback.store') }}" method="POST">
                        @csrf
                      <input type="text" name="name" placeholder="name" class="form-control mb-2">
                      {{-- <input type="text" name="address" placeholder="Address" class="form-control mb-2"> --}}
                      <input type="number" name="phone" placeholder="Contact Number" class="form-control mb-2">
                      <input type="email" name="email" placeholder="Email" class="form-control mb-2">
                      <!-- <label for="datetime"> Select Date and Time:</label> -->
                      <!-- <input type="datetime-local" name="datetime" id="datetime" class="form-control mb-2"> -->
                      {{-- <input type="text" name="subject" placeholder="Subject" class="form-control mb-2"> --}}
                      <textarea name="message" placeholder="Write your Message" class="form-control mb-2"></textarea>
                      <!-- <button class="btn btn-success btn-lg" name="btn-send">Send</button> -->
                      <input type="submit" name="submit" value="submit" class="btn btn-success btn-lg" >

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</x-frontend-layout>
