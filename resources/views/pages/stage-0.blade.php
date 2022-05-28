@extends('layout.default')
@section('content')

<!-- MultiStep Form -->
<div class="container" id="grad1">
    <div class="title text-center py-5">
        <h2>Process Bill Steps</h2>
        <p>Fill all form field to go to next step</p>
    </div>

    <div class="card">
        <div class="row">
            <div class="col-md-12 mx-0">
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="wharfage"><strong>Wharfage Ship Charges</strong></li>
                        <li id="storage"><strong>Storage Charges</strong></li>
                        <li id="destuff"><strong>Destuffing Charges</strong></li>
                        <li id="lift"><strong>Lifting Charges</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title">Account Information</h2>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <a href="{{url('users-import')}}" class="btn btn-dark mx-2">Cancel</a>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title">Personal Information</h2>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous btn btn-warning" value="Previous"/>
                        <input type="button" name="next" class="next action-button btn btn-primary" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title">Payment Information</h2>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="make_payment" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title">Payment Information</h2>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="make_payment" class="next action-button" value="Confirm"/>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title text-center">Success !</h2>
                            <br><br>
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                </div>
                            </div>
                            <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5>You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


</div>
@endsection
