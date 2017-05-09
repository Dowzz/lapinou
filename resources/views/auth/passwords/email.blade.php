

<!-- Main Content -->



                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           

                            <div class="input-group margin-bottom-sm">
                                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                 <input id="email" type="email" name="email" class="form-control"  placeholder="Email" value="{{ old('email') }}" required />

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-elegant btn-sm" id="bouton-panier">Envoyer moi le mail !</button>
                            </div>
                        </div>
                    </form>


