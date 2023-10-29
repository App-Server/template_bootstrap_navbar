<?php

include "../database/settings.php";
include "../template/navbar.php";
include "../template/vue.php";

?>

<br>

<div class="container">
    <!-- <div class="card">
        <div class="card-body"> -->
            <div class="container">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Cadastrar Lead
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Lead</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nome do Lead</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputText" class="form-label">Site URL</label>
                                        <input type="Text" class="form-control" id="exampleInputText">
                                    </div>

                                    <label for="exampleInputText" class="form-label">Segmento</label>
                                    <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                                        <option selected></option>
                                        <option value="1">Industria e comercio</option>
                                        <option value="2">Supermecado</option>
                                        <option value="3">Restarurante</option>
                                        <option value="4">Construção Civil</option>
                                        <option value="5">Transporte Rodoviario</option>
                                    </select>

                                    <label for="exampleInputText" class="form-label">Plataforma de ecommerce</label>
                                    <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                                        <option selected></option>
                                        <option value="ac">Rio Branco - AC</option>
                                        <option value="al">Maceió - AL</option>
                                        <option value="ap">Macapá - AP</option>
                                        <option value="am">Manaus - AM</option>
                                        <option value="ba">Salvador - BA</option>
                                        <option value="ce">Fortaleza - CE</option>
                                        <option value="df">Brasília - DF</option>
                                        <option value="es">Vitória - ES</option>
                                        <option value="go">Goiânia - GO</option>
                                        <option value="ma">São Luís - MA</option>
                                        <option value="mt">Cuiabá - MT</option>
                                        <option value="ms">Campo Grande - MS</option>
                                        <option value="mg">Belo Horizonte - MG</option>
                                        <option value="pa">Belém - PA</option>
                                        <option value="pb">João Pessoa - PB</option>
                                        <option value="pr">Curitiba - PR</option>
                                        <option value="pe">Recife - PE</option>
                                        <option value="pi">Teresina - PI</option>
                                        <option value="rj">Rio de Janeiro - RJ</option>
                                        <option value="rn">Natal - RN</option>
                                        <option value="rs">Porto Alegre - RS</option>
                                        <option value="ro">Porto Velho - RO</option>
                                        <option value="rr">Boa Vista - RR</option>
                                        <option value="sc">Florianópolis - SC</option>
                                        <option value="sp">São Paulo - SP</option>
                                        <option value="se">Aracaju - SE</option>
                                        <option value="to">Palmas - TO</option>
                                    </select>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email de contato</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputNumber" class="form-label">Telefone</label>
                                        <input type="Number" class="form-control" id="exampleInputNumber">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputText" class="form-label">Anotações</label>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                    <br>

                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Button</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <!-- <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0"> -->
            <div class="card">
                <div class="card-body">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0"><br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0"><br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0"><br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0"><br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0"><br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0"><br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0"><br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0"><br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0"><br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lead</h5>
                            <p class="card-text">ABC industria e comercio Ltda</p>
                            <p class="card-text">wwww.exemplo.com.br</p>
                            <p class="card-text">São Paulo</p>
                            <p class="card-text">Segmento</p>
                            <p class="card-text">Telefone</p>
                            <p class="card-text">Email</p>
                            <a href="#" class="btn btn-success">Ver Formulario</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>