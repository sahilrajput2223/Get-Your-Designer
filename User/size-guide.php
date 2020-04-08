<?php 
if(empty($_SESSION['user'])){
    header("Location:login.php");
} 

    include_once("header.php");
?>
    <!--Size Guide Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="other-page margin-top-255">
                        <!--Title-->
                        <h3 class="page-title">size guide</h3>
                        <!-- End Title-->
                        <!--Table-->
                        <div class="table-group">
                            <!--Table_1-->
                            <h6>women’s clothing - international size conversion</h6>
                            <table class="margin-bottom-50">
                                <tr>
                                   <th></th>
                                    <th>X-SMALL</th>
                                    <th>SMALL</th>
                                    <th>MEDIUM</th>
                                    <th>LARGE</th>
                                </tr>
                                <tr>
                                    <td>US</td>
                                    <td>2/4</td>
                                    <td>4/6</td>
                                    <td>8</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>UK</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>14</td>
                                </tr>
                                <tr>
                                    <td>EU</td>
                                    <td>34</td>
                                    <td>36</td>
                                    <td>38</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>AUS</td>
                                    <td>6</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>12</td>
                                </tr>
                            </table>
                            <!--Table_2-->
                            <h6>BODY MESURMENTS</h6>
                            <table>
                                <tr>
                                    <th></th>
                                    <th colspan="2">X-SMALL</th>
                                    <th colspan="2">WAIST</th>
                                    <th colspan="2">HIPS</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>INCHES</td>
                                    <td>CM</td>
                                    <td>INCHES</td>
                                    <td>CM</td>
                                    <td>INCHES</td>
                                    <td>CM</td>
                                </tr>
                                <tr>
                                    <td>US</td>
                                    <td>31.5</td>
                                    <td>80</td>
                                    <td>24.5</td>
                                    <td>62</td>
                                    <td>33.75</td>
                                    <td>86</td>
                                </tr>
                                <tr>
                                    <td>UK</td>
                                    <td>33</td>
                                    <td>84</td>
                                    <td>26</td>
                                    <td>66</td>
                                    <td>35.5</td>
                                    <td>90</td>
                                </tr>
                                <tr>
                                    <td>EU</td>
                                    <td>34.5</td>
                                    <td>88</td>
                                    <td>27.5</td>
                                    <td>70</td>
                                    <td>37</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <td>AUS</td>
                                    <td>36.25</td>
                                    <td>92</td>
                                    <td>29.25</td>
                                    <td>74</td>
                                    <td>38.5</td>
                                    <td>98</td>
                                </tr>
                            </table>
                        </div>
                        <!--End Table-->
                        <!--Size Guide Info-->
                        <div class="info">
                           <div class="info-title">
                               <h5>Mesuring Guidelines</h5>
                           </div>
                            <div class="info-content">
                                <p>Bust: metiens nimirum pars imaginis sub armis retentis tape paralleli areae.</p>
                                <p>Lumbos: metiens metire in circuitu ubi angustae fauces custodiens tape commode superhumerale nequeant separari.</p>
                                <p>Coxis: metiens metire horizontaliter circa plenissima membrorum tuorum imo / superiorem femorum proxime VIII "Infra waistline.</p>
                                <p>Inseam: metiens perpendiculari ex illis usque ad interfeminium linea sequens naturales pede.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include_once("footer.php");
?>