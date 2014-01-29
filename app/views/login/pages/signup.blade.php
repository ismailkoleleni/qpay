@extends('login.pages.signup_template')
@section('signup_wrapper')
  <div id="login-container" style="padding-bottom: 10%;">
    
    
    <div id="login-header">
        
        <h3 style='text-align:center;'>Signup As</h3>
        
    </div> <!-- /login-header -->
    
        <div id="login-content" class="clearfix">
            <div class="plan-container" style='width:50%;'>
                <div class="plan blue">
                    <div class="plan-header">
                        <div class="plan-title">
                            Individual                    
                        </div> <!-- /plan-title -->
                    </div> <!-- /plan-header -->              
                    <div class="plan-actions">              
                        <a href="signup/individual" class="btn">Signup</a>             
                    </div> <!-- /plan-actions -->
                </div> <!-- /plan -->
            </div> <!-- /plan-container -->
            <div class="plan-container" style='width:50%;'>
                <div class="plan green">
                    <div class="plan-header">
                        <div class="plan-title">
                            Business                    
                        </div> <!-- /plan-title -->
                    </div> <!-- /plan-header -->              
                    <div class="plan-actions">              
                        <a href="signup/business" class="btn">Signup</a>             
                    </div> <!-- /plan-actions -->
        
                </div> <!-- /plan -->
            </div> <!-- /plan-container -->
                

        </div> <!-- /login-content -->
        
        
        
    
</div> <!-- /login-wrapper -->

@stop
