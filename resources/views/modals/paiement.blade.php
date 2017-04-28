                    <!--CREDIT CART PAYMENT-->
                    <div class="panel">
                        <div class="panel-heading"><h2>Paiment sécurisé par carte</h2></div>
                        <div class="form-group">
                                <div class="col-md-12">
                                    <span>Payer en toute sécurité avec votre carte !</span>
                                    <ul class="cards">
                                        <li class="visa hand">Visa</li>
                                        <li class="mastercard hand">MasterCard</li>
                                        <li class="amex hand">American Express</li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        <div class="panel-body">
                            <div class="form-group col-md-12">
                                <div class="col-md-12"><strong>Type de carte</strong></div>
                                <div class="col-md-12">
                                    <select id="CreditCardType" name="CreditCardType" class="form-control">
                                        <option value="5">Visa</option>
                                        <option value="6">MasterCard</option>
                                        <option value="7">American Express</option>
                                        <option value="8">Discover</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <strong>Numéro de la carte</strong>
                               <input class="input-dark-bg" type="text" class="form-control" name="car_number"/>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Date d'expiration</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Mois</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Année</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <strong>Cryptogramme visuel (au dos de la carte)</strong>
                                <input  class="input-dark-bg" type="text" class="form-control" name="car_code" />
                            </div>
                            <div class="form-group col-md-12">
                                    <button id="bouton-panier2" id="order" type="submit" class="btn btn-elegant btn-submit-fix">Place Order</button>
                                </div>
                        </div>
                    </div>
                    <!--CREDIT CART PAYMENT END-->