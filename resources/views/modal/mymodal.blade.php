<style>

 .card {
     border-radius: 0;
     width: calc(480px + 10 * ((100vw - 320px) / 680));
     box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.8)
 }

 .card-body {
     border-radius: 9px !important
 }

 small {
     font-size: 15px !important;
     display: flex;
     justify-content: center !important
 }

 button {
     font-size: calc(12px + (13 - 12) * ((100vw - 360px) / (1600 - 320))) !important;
     ;
     padding: calc(6px + 5 * ((100vw - 320px) / 780)) !important;
     color: #000 !important
 }

 button:focus {
     -moz-box-shadow: none !important;
     -webkit-box-shadow: none !important;
     box-shadow: none !important;
     outline-width: 0
 }

 label {
     font-size: 11px !important;
     vertical-align: middle !important
 }

 #my-input {
     vertical-align: middle !important
 }

 .custom-control {
     padding: auto !important
 }

 .signin {
     color: #52B4DB;
     cursor: pointer
 }

 .custom-control-label span {
     position: relative;
     top: 4px
 }

 .modal-content {
     width: calc(480px + 10 * ((100vw - 320px) / 680))
 }

 .modal-content {
     background: transparent !important
 }

 .cross {
     font-size: 25px !important;
     cursor: pointer
 }

 .btn-primary:hover,
 .btn-primary {
     background-color: #315189;
     color: #fff !important
 }

 input {
     padding: 6px 12px 6px 12px;
     border: 1px solid lightgrey;
     border-radius: 4px;
     margin-bottom: 25px;
     margin-top: 2px;
     width: 100%;
     box-sizing: border-box;
     color: #2C3E50;
     font-size: 14px;
     letter-spacing: 1px;
     background-color: #ECEFF1
 }

 input:focus {
     -moz-box-shadow: none !important;
     -webkit-box-shadow: none !important;
     box-shadow: none !important;
     border: 1px solid #304FFE;
     outline-width: 0
 }

 a:focus,
 button:focus {
     -moz-box-shadow: none !important;
     -webkit-box-shadow: none !important;
     box-shadow: none !important;
     outline-width: 0
 }

 select:focus,
 input:focus {
     box-shadow: none !important;
     border: 1px solid #2196F3 !important;
     outline-width: 0 !important;
     font-weight: 400;
     background-color: #ECEFF1
 }

 select {
     padding: 6px 12px 6px 12px;
     background-color: #ECEFF1 !important
 }

 .pass {
     font-size: 11px;
     color: #2196F3;
     cursor: pointer
 }

 .line {
     height: 1px;
     width: 45%;
     background-color: #E0E0E0;
     margin-top: 10px
 }

 .or {
     width: 10%
 }

 .btn-inverse {
     font-size: calc(12px + (14 - 12) * ((100vw - 360px) / (1600 - 300))) !important;
     padding-top: calc(4px + 3 * ((100vw - 320px) / 680));
     padding-bottom: calc(4px + 3 * ((100vw - 320px) / 680));
     padding-left: calc(5px + 8 * ((100vw - 320px) / 680));
     padding-right: calc(5px + 8 * ((100vw - 320px) / 680));
     box-shadow: 2px 3px 2px #888888;
     border: 1px solid #ccc
 }

 @media (max-width: 492px) {
     .card {
         width: unset
     }
 }
    </style>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
            <div class="modal-content border-0 mx-3">
                <div class="modal-body p-0">
                    <div class="row justify-content-center">
                   
                        <div class="col">
                            <div class="card">
                                <div class="card-header bg-white border-0 pb-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="flex-col-auto"></div>
                                        <div class="col-auto text-right"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="cross" aria-hidden="true">&times;</span> </button></div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row justify-content-center pb-sm-5 pb-3">
                                        <div class="col-sm-8 col px-sm-0 px-4">
                                            <h4 class="card-title mt-sm-5 mt-3 mb-sm-5 mb-3 text-center"><b>Silakan Masuk</b></h4>
                                            <div class="row">
                                                <div class="col"><input type="text" name="email" placeholder="Email"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><input type="password" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><select class="form-control">
                                                        <option>Berkunjung</option>
                                                        <option>Informasi Jasa Layanan</option>
                                                        <option>Lain-lain</option>
                                                    </select></div>
                                            </div>
                                            <div class="row align-items-center mt-4 mb-5">
                                                <div class="col text-left">
                                                    <div class="custom-control custom-checkbox"><input id="my-input" class="custom-control-input" type="checkbox" name="" value="true"><label for="my-input" class="custom-control-label"><span>Remember me</span></label></div>
                                                </div>
                                                <div class="col-auto text-right"> <span class="pass"><u>Forgot password</u></span></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><button type="button" class="btn btn-primary btn-block"><b>SIGNUP</b></button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mb-5 mx-0 px-0">
                                        <div class="line"></div> <small class="text-muted or text-center">OR</small>
                                        <div class="line"></div>
                                    </div>
                                    <div class="row justify-content-center mb-sm-5 mb-3">
                                        <div class=" flex-col-auto ">
                                            <div class="row justify-content-center">
                                                <div class="flex-col mx-1"> <a href="#" class="btn btn-inverse "> <span class="fa fa-facebook"></span> Facebook </a> </div>
                                                <div class="flex-col mx-1"> <a href="#" class="btn btn-inverse "> <span class="fa fa-linkedin"></span> Linkedin </a> </div>
                                                <div class="flex-col mx-1"> <a href="#" class="btn btn-inverse "> <span class="fa fa-google"></span> Google </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  