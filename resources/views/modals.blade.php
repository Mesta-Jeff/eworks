<!-- resources/views/yourview.blade.php -->

@extends('layouts.main_layout')

@section('title', 'Your View Title')


@section('content')


<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-gitlab bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Modal</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Advance Components</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Modal</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body button-page">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Static Example</h5>
                                </div>
                                <div class="card-block">

                                    <div class="bd-example bd-example-modal">
                                        <div class="modal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal title</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Modal body text goes here.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                            class="btn btn-secondary mobtn"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-primary mobtn">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Bootstrap Modals</h5>
                                </div>
                                <div class="card-block">
                                    <p>use code<code> modal-lg, modal-sm</code> to use large and
                                        small popup modal.</p>
                                    <ul>
                                        <li>

                                            <button type="button" class="btn btn-default waves-effect"  data-toggle="modal"
                                                data-target="#default-Modal">Static</button>
                                            <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Modal title</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Static Modal</h5>
                                                            <p>Lorem ipsum dolor sit amet,
                                                                consectetur adipiscing lorem impus
                                                                dolorsit.onsectetur adipiscing</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-default waves-effect "
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button"
                                                                class="btn btn-primary waves-effect waves-light ">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>

                                            <button type="button"
                                                class="btn btn-primary waves-effect"
                                                data-toggle="modal"
                                                data-target="#large-Modal">Large</button>
                                            <div class="modal fade" id="large-Modal" tabindex="-1"
                                                role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Modal title</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Default Modal</h5>
                                                            <p>This is Photoshop's version of Lorem
                                                                IpThis is Photoshop's version of
                                                                Lorem Ipsum. Proin gravida nibh vel
                                                                velit auctor aliquet. Aenean
                                                                sollicitudin, lorem quis bibendum
                                                                auctor, nisi elit consequat ipsum,
                                                                nec sagittis sem nibh id elit.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-default waves-effect "
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button"
                                                                class="btn btn-primary waves-effect waves-light ">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>

                                            <button type="button"
                                                class="btn btn-success waves-effect"
                                                data-toggle="modal"
                                                data-target="#small-Modal">Small</button>
                                            <div class="modal fade" id="small-Modal" tabindex="-1"
                                                role="dialog">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Modal title</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Small Modal</h5>
                                                            <p>Lorem ipsum dolor sit amet,
                                                                consectetur adipiscing .</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-default waves-effect "
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Custom Modals</h5>
                                </div>
                                <div class="card-block">
                                    <p>use custom modals tabs, overflow, lightbox, Multi modal.</p>
                                    <ul>
                                        <li>

                                            <button type="button"
                                                class="btn btn-warning waves-effect"
                                                data-toggle="modal"
                                                data-target="#Modal-tab">Tabs</button>

                                            <div class="modal fade modal-flex" id="Modal-tab"
                                                tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active"
                                                                        data-toggle="tab"
                                                                        href="#tab-home"
                                                                        role="tab">Home</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                        data-toggle="tab"
                                                                        href="#tab-profile"
                                                                        role="tab">Profile</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                        data-toggle="tab"
                                                                        href="#tab-messages"
                                                                        role="tab">Messages</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                        data-toggle="tab"
                                                                        href="#tab-settings"
                                                                        role="tab">Settings</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content modal-body">
                                                                <div class="tab-pane active"
                                                                    id="tab-home" role="tabpanel">
                                                                    <h6>Home</h6>
                                                                    <p>Lorem ipsum dolor sit amet,
                                                                        consectetur adipiscing lorem
                                                                        impus dolorsit.onsectetur
                                                                        adipiscing</p>
                                                                </div>
                                                                <div class="tab-pane"
                                                                    id="tab-profile"
                                                                    role="tabpanel">
                                                                    <h6>Profile</h6>
                                                                    <p>Lorem ipsum dolor sit amet,
                                                                        consectetur adipiscing lorem
                                                                        impus dolorsit.onsectetur
                                                                        adipiscing</p>
                                                                </div>
                                                                <div class="tab-pane"
                                                                    id="tab-messages"
                                                                    role="tabpanel">
                                                                    <h6>Messages</h6>
                                                                    <p>Lorem ipsum dolor sit amet,
                                                                        consectetur adipiscing lorem
                                                                        impus dolorsit.onsectetur
                                                                        adipiscing</p>
                                                                </div>
                                                                <div class="tab-pane"
                                                                    id="tab-settings"
                                                                    role="tabpanel">
                                                                    <h6>Settings</h6>
                                                                    <p>Lorem ipsum dolor sit amet,
                                                                        consectetur adipiscing lorem
                                                                        impus dolorsit.onsectetur
                                                                        adipiscing</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>

                                            <button type="button"
                                                class="btn btn-danger waves-effect"
                                                data-toggle="modal"
                                                data-target="#Modal-overflow">Overflow</button>

                                            <div class="modal fade modal-flex" id="Modal-overflow"
                                                tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body model-container">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h5 class="font-header">Some text above
                                                                the scrollable box</h5>
                                                            <p>This is Photoshop's version of Lorem
                                                                IpThis is Photoshop's version of
                                                                Lorem Ipsum. Proin gravida nibh vel
                                                                velit auctor aliquet. Aenean
                                                                sollicitudin, lorem quis bibendum
                                                                auctor, nisi elit consequat ipsum,
                                                                nec sagittis sem nibh id elit.</p>
                                                            <div class="overflow-container">
                                                                <h5>Overflow container</h5>
                                                            </div>
                                                            <img src="../assets/images/Modal/overflow.html"
                                                                alt class="img img-fluid" />
                                                            <p class="p-t-15">Similique velit aut et
                                                                cumque illum consequatur doloribus
                                                                quis ipsam sunt sint qui impedit
                                                                nihil voluptate animi nesciunt
                                                                corporis aspernatur quaerat sed rem
                                                                voluptas commodi magnam porro eum
                                                                sunt quis ullam aut odit laudantium
                                                                quia soluta corrupti aut qui
                                                                officiis hic voluptatibus aut itaque
                                                                voluptates qui expedita minus autem
                                                                aliquid et debitis omnis provident
                                                                quia voluptate illo tempora illum
                                                                maiores perferendis dolorem
                                                                recusandae ut reprehenderit ad est
                                                                eum occaecati quam non et quod amet
                                                                illo id doloremque vitae porro porro
                                                                sit amet voluptatem quia laboriosam
                                                                aliquam quia quis facilis eveniet
                                                                dolorum sunt neque rerum earum ut
                                                                eaque ab tenetur quia nam quis rerum
                                                                cumque eos excepturi nostrum qui
                                                                distinctio porro enim vitae eligendi
                                                                accusantium quia possimus et autem
                                                                error repellendus vitae ad quia
                                                                laborum minima autem nulla optio ad
                                                                ea nobis animi illo voluptates cum
                                                                recusandae temporibus voluptate amet
                                                                quam excepturi odio quia suscipit
                                                                inventore et rerum quos rerum aut
                                                                doloribus aut consequatur earum
                                                                impedit reiciendis saepe voluptates
                                                                exercitationem maxime culpa saepe
                                                                ducimus culpa ut aliquam magnam aut
                                                                veniam sit totam architecto vel
                                                                distinctio aspernatur aut qui labore
                                                                quaerat rerum voluptatem sapiente
                                                                sint sed explicabo et hic laboriosam
                                                                sit nesciunt et minus et aut
                                                                dignissimos ut porro incidunt sint
                                                                et nihil id tempora aut et illum
                                                                molestiae aperiam minus earum
                                                                repellendus tempora illo itaque amet
                                                                facilis quia rem iure quod corrupti
                                                                dolores et sequi sunt ipsa labore
                                                                quia unde qui blanditiis ut eos at
                                                                quia beatae sit repellat quibusdam
                                                                neque natus expedita sed
                                                                perspiciatis atque quas voluptatem
                                                                autem velit enim qui omnis molestiae
                                                                et repellat sapiente corporis ipsam
                                                                sed veritatis in quo quod et
                                                                occaecati quia rerum iusto cumque
                                                                accusamus numquam sunt quo sequi id
                                                                molestiae consequatur doloribus
                                                                molestiae autem nisi nostrum
                                                                blanditiis et nihil sed nobis
                                                                incidunt omnis quos minima eius quo
                                                                accusamus qui ea minus aut est
                                                                tempora quia inventore ad delectus
                                                                vel et accusamus fuga eius ipsa
                                                                aliquam alias sint maxime quae enim
                                                                atque corrupti libero eos nesciunt
                                                                et voluptas velit numquam illo non
                                                                qui quaerat enim omnis et ex
                                                                asperiores inventore quisquam est
                                                                enim labore ut nobis consequatur
                                                                fuga ut quo vel molestiae alias eius
                                                                quod aspernatur laudantium pariatur
                                                                eius fuga inventore esse at alias
                                                                repudiandae perspiciatis id qui fuga
                                                                consequatur recusandae atque iste
                                                                commodi sapiente eaque labore ipsa
                                                                aut sint quo vel recusandae ab iusto
                                                                ducimus minus voluptas ex et illo
                                                                commodi ipsa pariatur qui quae
                                                                adipisci saepe dicta delectus
                                                                nostrum illum incidunt laboriosam
                                                                est maxime eum debitis et explicabo
                                                                quia doloribus quod occaecati
                                                                tempore tempora labore nihil enim
                                                                recusandae et dolorum temporibus
                                                                molestiae sint non porro neque minus
                                                                provident reprehenderit similique
                                                                illum voluptate qui dicta dolorum
                                                                totam quia ut nihil dolore fugiat
                                                                laboriosam molestiae eveniet omnis
                                                                consequatur non magni nemo
                                                                consequatur laboriosam non facilis
                                                                harum eaque illo pariatur rerum
                                                                dolores quis autem nemo aut enim
                                                                tenetur pariatur et non quam
                                                                repudiandae quia aliquam sunt
                                                                corporis aperiam natus aut
                                                                reprehenderit non non illum cum
                                                                laboriosam nulla quaerat eligendi
                                                                laudantium perspiciatis.</p>
                                                        </div>
                                                        <div class="p-15">
                                                            <h5 class="font-header">Some text above
                                                                the scrollable box</h5>
                                                            <p>This is Photoshop's version of Lorem
                                                                IpThis is Photoshop's version of
                                                                Lorem Ipsum. Proin gravida nibh vel
                                                                velit auctor aliquet. Aenean
                                                                sollicitudin, lorem quis bibendum
                                                                auctor, nisi elit consequat ipsum,
                                                                nec sagittis sem nibh id elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>

                                            <button type="button" class="btn btn-info waves-effect"
                                                data-toggle="modal"
                                                data-target="#Modal-lightbox">Light Box</button>

                                            <div class="modal fade" id="Modal-lightbox"
                                                tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                            <img src="../assets/images/Modal/overflow.html"
                                                                alt class="img img-fluid" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>

                                            <button type="button"
                                                class="btn btn-success waves-effect m-b-10"
                                                data-toggle="modal" data-target="#myModal">Multi
                                                Model</button>

                                            <div class="modal fade modal-flex" id="Modal-Multi"
                                                tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h4 class="modal-title">Modal title</h4>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <div>
                                                                <button type="button"
                                                                    class="btn btn-default waves-effect m-t-20 "
                                                                    data-toggle="modal"
                                                                    data-target="#meta-Modal">Click
                                                                    Here!</button>
                                                            </div>
                                                            <div class="modal fade" id="meta-Modal"
                                                                tabindex="-1" role="dialog">
                                                                <div class="modal-dialog modal-sm"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">
                                                                                Modal title</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5>Small Modal</h5>
                                                                            <p>Lorem ipsum dolor sit
                                                                                amet, consectetur
                                                                                adipiscing .</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-default waves-effect"
                                                                                data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="m-t-10">Lorem ipsum dolor sit
                                                                amet, consectetur adipiscing lorem
                                                                impus dolorsit.onsectetur adipiscing
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-default waves-effect "
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button"
                                                                class="btn btn-primary waves-effect waves-light ">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Modal 1</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="container"></div>
                                                        <div class="modal-body">Content for the
                                                            dialog / modal goes here.
                                                            <p class="p-t-40 p-b-40">more content
                                                            </p>
                                                            <a data-toggle="modal" href="#myModal2"
                                                                class="btn btn-primary">Launch
                                                                modal</a>
                                                        </div>
                                                        <div class="modal-footer"> <a href="#"
                                                                data-dismiss="modal"
                                                                class="btn">Close</a>
                                                            <a href="#" class="btn btn-primary">Save
                                                                changes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="myModal2">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Modal 2</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="container"></div>
                                                        <div class="modal-body">Content for the
                                                            dialog / modal goes here.
                                                            <p class="p-t-30 p-b-40">come content
                                                            </p>
                                                            <a data-toggle="modal" href="#myModal3"
                                                                class="btn btn-primary">Launch
                                                                modal</a>
                                                        </div>
                                                        <div class="modal-footer"> <a href="#"
                                                                data-dismiss="modal"
                                                                class="btn">Close</a>
                                                            <a href="#" class="btn btn-primary">Save
                                                                changes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="myModal3">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Modal 3</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="container"></div>
                                                        <div class="modal-body">Content for the
                                                            dialog / modal goes here.
                                                            <a data-toggle="modal" href="#myModal4"
                                                                class="btn btn-primary">Launch
                                                                modal</a>
                                                        </div>
                                                        <div class="modal-footer"> <a href="#"
                                                                data-dismiss="modal"
                                                                class="btn">Close</a>
                                                            <a href="#" class="btn btn-primary">Save
                                                                changes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="myModal4">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Modal 4</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="container"></div>
                                                        <div class="modal-body">Content for the
                                                            dialog / modal goes here.</div>
                                                        <div class="modal-footer"> <a href="#"
                                                                data-dismiss="modal"
                                                                class="btn">Close</a>
                                                            <a href="#" class="btn btn-primary">Save
                                                                changes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Bootstrap Modals</h5>
                                </div>
                                <div class="card-block">
                                    <p>use
                                        button<code> onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);"</code>
                                        to use effect.</p>
                                    <ul>
                                        <li>
                                            <button type="button"
                                                class="btn btn-primary sweet-1 m-b-10"
                                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Basic</button>
                                        </li>
                                        <li>
                                            <button type="button"
                                                class="btn btn-success alert-success-msg m-b-10"
                                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-success']);">Success</button>
                                        </li>
                                        <li>
                                            <button type="button"
                                                class="btn btn-warning alert-confirm m-b-10"
                                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-confirm']);">Confirm</button>
                                        </li>
                                        <li>
                                            <button type="button"
                                                class="btn btn-danger alert-success-cancel m-b-10"
                                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-success-cancel']);">Success
                                                or Cancel</button>
                                        </li>
                                        <li>
                                            <button type="button"
                                                class="btn btn-primary alert-prompt m-b-10"
                                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-prompt']);">Prompt</button>
                                        </li>
                                        <li>
                                            <button type="button"
                                                class="btn btn-success alert-ajax m-b-10"
                                                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-ajax']);">Ajax</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Bootstrap Modals</h5>
                                </div>
                                <div class="card-block">
                                    <p>use button with class<code> md-effect-1 to 18</code> to use
                                        effect.</p>
                                    <div class="animation-model">
                                        <button type="button"
                                            class="btn btn-default btn-outline-default waves-effect md-trigger"
                                            data-modal="modal-1">Fade in &amp; Scale</button>
                                        <button type="button"
                                            class="btn btn-primary btn-outline-primary waves-effect md-trigger"
                                            data-modal="modal-2">Slide in (right)</button>
                                        <button type="button"
                                            class="btn btn-success btn-outline-success waves-effect md-trigger"
                                            data-modal="modal-3">Slide in (bottom)</button>
                                        <button type="button"
                                            class="btn btn-warning btn-outline-warning waves-effect md-trigger"
                                            data-modal="modal-4">Newspaper</button>
                                        <button type="button"
                                            class="btn btn-danger btn-outline-danger waves-effect md-trigger"
                                            data-modal="modal-5">Fall</button>
                                        <button type="button"
                                            class="btn btn-info btn-outline-info waves-effect md-trigger"
                                            data-modal="modal-6">Side Fall</button>
                                        <button type="button"
                                            class="btn btn-default btn-outline-default waves-effect md-trigger"
                                            data-modal="modal-7">Sticky Up</button>
                                        <button type="button"
                                            class="btn btn-primary btn-outline-primary waves-effect md-trigger"
                                            data-modal="modal-8">3D Flip (horizontal)</button>
                                        <button type="button"
                                            class="btn btn-success btn-outline-success waves-effect md-trigger"
                                            data-modal="modal-9">3D Flip (vertical)</button>
                                        <button type="button"
                                            class="btn btn-warning btn-outline-warning waves-effect md-trigger"
                                            data-modal="modal-10">3D Sign</button>
                                        <button type="button"
                                            class="btn btn-danger btn-outline-danger waves-effect md-trigger"
                                            data-modal="modal-11">Super Scaled</button>
                                        <button type="button"
                                            class="btn btn-info btn-outline-info waves-effect md-trigger"
                                            data-modal="modal-12">Just Me</button>
                                        <button type="button"
                                            class="btn btn-primary btn-outline-primary waves-effect md-trigger"
                                            data-modal="modal-13">3D Slit</button>
                                        <button type="button"
                                            class="btn btn-success btn-outline-success waves-effect md-trigger"
                                            data-modal="modal-14">3D Rotate Bottom</button>
                                        <button type="button"
                                            class="btn btn-warning btn-outline-warning waves-effect md-trigger"
                                            data-modal="modal-15">3D Rotate In Left</button>
                                        <button type="button"
                                            class="btn btn-danger btn-outline-danger waves-effect md-trigger md-setperspective"
                                            data-modal="modal-17">Let me in</button>
                                        <button type="button"
                                            class="btn btn-default btn-outline-default waves-effect md-trigger md-setperspective"
                                            data-modal="modal-18">Make way!</button>
                                        <button type="button"
                                            class="btn btn-primary btn-outline-primary waves-effect md-trigger md-setperspective"
                                            data-modal="modal-19">Slip from top</button>

                                        <div class="md-modal md-effect-1" id="modal-1">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-2" id="modal-2">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-3" id="modal-3">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-4" id="modal-4">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-5" id="modal-5">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-6" id="modal-6">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-7" id="modal-7">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-8" id="modal-8">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-9" id="modal-9">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-10" id="modal-10">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-11" id="modal-11">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="md-modal md-effect-12" id="modal-12">
                                            <div class="md-content">
                                                <h3><span class="text-muted text-center">Modal
                                                        Dialog</span></h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="md-modal md-effect-13" id="modal-13">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-14" id="modal-14">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-15" id="modal-15">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-17" id="modal-17">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-18" id="modal-18">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-19" id="modal-19">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-modal md-effect-20" id="modal-20">
                                            <div class="md-content">
                                                <h3>Modal Dialog</h3>
                                                <div>
                                                    <p>This is a modal window. You can do the
                                                        following things with it:</p>
                                                    <ul>
                                                        <li><strong>Read:</strong> modal windows
                                                            will probably tell you something
                                                            important so don't forget to read what
                                                            they say.</li>
                                                        <li><strong>Look:</strong> a modal window
                                                            enjoys a certain kind of attention; just
                                                            look at it and appreciate its presence.
                                                        </li>
                                                        <li><strong>Close:</strong> click on the
                                                            button below to close the modal.</li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect md-close">Close</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="md-overlay"></div>
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


@endsection

