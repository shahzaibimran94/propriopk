@extends('layouts.cssNjs')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" id="login" method="POST" action="/portal">
                         {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" required value="">
                            </div>
                            <a href="" class="btn btn-lg btn-success btn-block">
                            <input type="submit" value="Login" 
                            style="width:100%; border:none; background:none;">
                            </a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var validator = $("#login").bootstrapValidator({
            fields : {
                email : {
                    message : "Email address is required",
                    validators : {
                        notEmpty : {
                            message : "Provide email"
                        }
                    }
                }
            }
        });
    });
</script>