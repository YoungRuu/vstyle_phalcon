
{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
     <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="357" version="1.1" width="650" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="50.5" y="323" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,323H625" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="248.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,248.5H625" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="174" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,174H625" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="99.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,99.5H625" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,25H625" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="521.2041312272174" y="335.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="271.95747266099636" y="335.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><path fill="#7cb47c" stroke="none" d="M63,270.2242C78.70595382746052,264.76086666666663,110.11786148238153,253.42320833333332,125.82381530984205,248.37086666666664C141.52976913730257,243.31852499999997,172.94167679222357,236.7218892531876,188.6476306196841,229.80546666666666C204.18286755771567,222.96422258652095,235.25334143377887,195.381541160221,250.78857837181044,193.34019999999998C266.15309842041313,191.32129116022097,296.88213851761844,212.07978809523806,312.24665856622113,213.56446666666665C327.95261239368165,215.08213809523807,359.3645200486026,204.33888333333334,375.07047387606315,205.3496C390.77642770352367,206.36031666666668,422.1883353584447,239.59169981785064,437.8942891859052,221.65019999999998C453.4295261239368,203.9037164845173,484.5,71.25456666666668,500.0352369380316,62.59766666666667C515.5704738760631,53.94076666666667,546.6409477521263,139.70165200364298,562.1761846901579,152.39499999999998C577.8821385176184,165.2278353369763,609.2940461725395,161.62554999999998,625,164.70239999999998L625,323L63,323Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#4da74d" d="M63,270.2242C78.70595382746052,264.76086666666663,110.11786148238153,253.42320833333332,125.82381530984205,248.37086666666664C141.52976913730257,243.31852499999997,172.94167679222357,236.7218892531876,188.6476306196841,229.80546666666666C204.18286755771567,222.96422258652095,235.25334143377887,195.381541160221,250.78857837181044,193.34019999999998C266.15309842041313,191.32129116022097,296.88213851761844,212.07978809523806,312.24665856622113,213.56446666666665C327.95261239368165,215.08213809523807,359.3645200486026,204.33888333333334,375.07047387606315,205.3496C390.77642770352367,206.36031666666668,422.1883353584447,239.59169981785064,437.8942891859052,221.65019999999998C453.4295261239368,203.9037164845173,484.5,71.25456666666668,500.0352369380316,62.59766666666667C515.5704738760631,53.94076666666667,546.6409477521263,139.70165200364298,562.1761846901579,152.39499999999998C577.8821385176184,165.2278353369763,609.2940461725395,161.62554999999998,625,164.70239999999998" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="270.2242" r="5" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="125.82381530984205" cy="248.37086666666664" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="188.6476306196841" cy="229.80546666666666" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="250.78857837181044" cy="193.34019999999998" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="312.24665856622113" cy="213.56446666666665" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="375.07047387606315" cy="205.3496" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="437.8942891859052" cy="221.65019999999998" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="500.0352369380316" cy="62.59766666666667" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="562.1761846901579" cy="152.39499999999998" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="625" cy="164.70239999999998" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#a7b3bc" stroke="none" d="M63,296.51773333333335C78.70595382746052,290.54283333333336,110.11786148238153,277.85175833333335,125.82381530984205,272.61813333333333C141.52976913730257,267.3845083333333,172.94167679222357,257.51018469945353,188.6476306196841,254.64873333333333C204.18286755771567,251.81838469945353,235.25334143377887,252.15196804788212,250.78857837181044,249.85093333333333C266.15309842041313,247.5751847145488,296.88213851761844,239.53322912087913,312.24665856622113,236.3416C327.95261239368165,233.0790457875458,359.3645200486026,223.89885833333332,375.07047387606315,224.0342C390.77642770352367,224.16954166666667,422.1883353584447,251.25343315118397,437.8942891859052,237.42433333333332C453.4295261239368,223.74554981785062,484.5,122.11323333333331,500.0352369380316,114.00266666666664C515.5704738760631,105.89209999999997,546.6409477521263,164.02529134790527,562.1761846901579,172.53979999999999C577.8821385176184,181.14787468123862,609.2940461725395,180.00469999999999,625,182.493L625,323L63,323Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#7a92a3" d="M63,296.51773333333335C78.70595382746052,290.54283333333336,110.11786148238153,277.85175833333335,125.82381530984205,272.61813333333333C141.52976913730257,267.3845083333333,172.94167679222357,257.51018469945353,188.6476306196841,254.64873333333333C204.18286755771567,251.81838469945353,235.25334143377887,252.15196804788212,250.78857837181044,249.85093333333333C266.15309842041313,247.5751847145488,296.88213851761844,239.53322912087913,312.24665856622113,236.3416C327.95261239368165,233.0790457875458,359.3645200486026,223.89885833333332,375.07047387606315,224.0342C390.77642770352367,224.16954166666667,422.1883353584447,251.25343315118397,437.8942891859052,237.42433333333332C453.4295261239368,223.74554981785062,484.5,122.11323333333331,500.0352369380316,114.00266666666664C515.5704738760631,105.89209999999997,546.6409477521263,164.02529134790527,562.1761846901579,172.53979999999999C577.8821385176184,181.14787468123862,609.2940461725395,180.00469999999999,625,182.493" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="296.51773333333335" r="5" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="125.82381530984205" cy="272.61813333333333" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="188.6476306196841" cy="254.64873333333333" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="250.78857837181044" cy="249.85093333333333" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="312.24665856622113" cy="236.3416" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="375.07047387606315" cy="224.0342" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="437.8942891859052" cy="237.42433333333332" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="500.0352369380316" cy="114.00266666666664" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="562.1761846901579" cy="172.53979999999999" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="625" cy="182.493" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#2577b5" stroke="none" d="M63,296.51773333333335C78.70595382746052,296.2396,110.11786148238153,298.19398333333334,125.82381530984205,295.4052C141.52976913730257,292.6164166666666,172.94167679222357,275.442185428051,188.6476306196841,274.2074666666667C204.18286755771567,272.98616876138436,235.25334143377887,287.9508370165746,250.78857837181044,285.58113333333336C266.15309842041313,283.23747034990794,296.88213851761844,257.6909258241758,312.24665856622113,255.35399999999998C327.95261239368165,252.96514249084248,359.3645200486026,264.20708333333334,375.07047387606315,266.678C390.77642770352367,269.14891666666665,422.1883353584447,286.8605249544627,437.8942891859052,275.1213333333333C453.4295261239368,263.5097416211293,484.5,180.55972500000001,500.0352369380316,173.27486666666667C515.5704738760631,165.99000833333332,546.6409477521263,208.6416179417122,562.1761846901579,216.84246666666667C577.8821385176184,225.13343460837888,609.2940461725395,233.64221666666666,625,239.24213333333333L625,323L63,323Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#0b62a4" d="M63,296.51773333333335C78.70595382746052,296.2396,110.11786148238153,298.19398333333334,125.82381530984205,295.4052C141.52976913730257,292.6164166666666,172.94167679222357,275.442185428051,188.6476306196841,274.2074666666667C204.18286755771567,272.98616876138436,235.25334143377887,287.9508370165746,250.78857837181044,285.58113333333336C266.15309842041313,283.23747034990794,296.88213851761844,257.6909258241758,312.24665856622113,255.35399999999998C327.95261239368165,252.96514249084248,359.3645200486026,264.20708333333334,375.07047387606315,266.678C390.77642770352367,269.14891666666665,422.1883353584447,286.8605249544627,437.8942891859052,275.1213333333333C453.4295261239368,263.5097416211293,484.5,180.55972500000001,500.0352369380316,173.27486666666667C515.5704738760631,165.99000833333332,546.6409477521263,208.6416179417122,562.1761846901579,216.84246666666667C577.8821385176184,225.13343460837888,609.2940461725395,233.64221666666666,625,239.24213333333333" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="296.51773333333335" r="5" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="125.82381530984205" cy="295.4052" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="188.6476306196841" cy="274.2074666666667" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="250.78857837181044" cy="285.58113333333336" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="312.24665856622113" cy="255.35399999999998" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="375.07047387606315" cy="266.678" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="437.8942891859052" cy="275.1213333333333" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="500.0352369380316" cy="173.27486666666667" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="562.1761846901579" cy="216.84246666666667" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="625" cy="239.24213333333333" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 6.5px; top: 192px; display: block;"><div class="morris-hover-row-label">2010 Q1</div><div class="morris-hover-point" style="color: #0b62a4">
  iPhone:
  2,666
</div><div class="morris-hover-point" style="color: #7A92A3">
  iPad:
  -
</div><div class="morris-hover-point" style="color: #4da74d">
  iPod Touch:
  2,647
</div></div></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
             
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                  
                </div>
                <!-- /.col-lg-4 -->
            </div>

{% endblock %}