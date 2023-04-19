@extends('partial.main')

@section('content')

<section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple Column</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Vessel Code</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Vessel Id</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Vessel Name</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Voy In</label>
                                            <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Voy Out</label>
                                            <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Agent</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Liner</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Voy Owner</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                        <input type="checkbox" name="checkbox_name" value="1"> Export 
                                        <input type="checkbox" name="checkbox_name" value="1"> Import
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Liner/Tramp</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Feeder/Direct</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Vessel Service</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                        <input type="checkbox" name="checkbox_name" value="1"> Ocean Going <br>
                                        <input type="checkbox" name="checkbox_name" value="1"> Inter Island
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Reg Flag</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">No PPK</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Billing Complete</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>

                   
                                    <br>
                                    <hr>
                                    <h6>Port Informatiom</h6>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Origin Port</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Next Port</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Dest Port</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Last Port</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>

                                    <hr>
                                    <h6>Vessel & Berth Informatiom</h6>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Vessel Length</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Berth No</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Berth Fr Metre</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Berth to Metre</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Berth Code</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="city-column">CY Code</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Berth Grid</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Btos Side</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>

                                    <hr>
                                    <h6>Booking Information</h6>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label style="font-weight; bold;" for="first-name-column" >Export</label>
                                            <br>
                                            Booking
                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                            Counter
                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Import</label>
                                            <br>
                                            Booking
                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                            Counter
                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                        </div>
                                    </div>

                                    <hr>
                                    <h4>Time Schedule</h4>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column"><h5>Estimate</h5></label>
                                            <br>
                                            Arrival Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            Anchorage Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            Pilot Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            Berthing Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            Start Work Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            End Work Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            Deparature Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column"><h5>Actual</h5></label>
                                            <br>
                                            Arrival Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            Anchorage Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            Pilot Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            Berthing Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            Start Work Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            End Work Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                            Deparature Date
                                            <input type="datetime-local" id="first-name-column" id="last-name-column" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="city-column"><h6>Idle Time</h6></label>
                                            <input type="datetime-local" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>

                                    <hr>
                                    <h4>Open Stack Information</h4>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Open Stack Date</label>
                                            <input type="datetime-local" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>

                                    <hr>
                                    <h4>Closing Time Information</h4>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Closing Date</label>
                                            <input type="datetime-local" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Cargo Closing Date</label>
                                            <input type="datetime-local" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>


                                    <div class="form-group col-12">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox5" class="form-check-input" checked="">
                                                <label for="checkbox5">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection