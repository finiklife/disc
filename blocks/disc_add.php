<div class="container">
    <form>
        <div class="row mb-2">
            <div class="col">
                <label for="exampleFormControlTextarea1">
                    Заголовок обсуждения
                </label>
                <input class="form-control" placeholder="Введите заголовок" required="" type="text"/>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <label for="form-datetime-local">
                    Начало
                </label>
                <input class="datetime-local form-control" id="date_1" type="datetime-local"/>
            </div>
            <div class="col">
                <label for="form-datetime-local">
                    Окончание
                </label>
                <input class="datetime-local form-control" id="date_2" type="datetime-local"/>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <label for="exampleFormControlTextarea1">
                    Содержание обсуждения
                </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
                        </textarea>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <label for="exampleFormControlTextarea1">
                    Варианты ответа
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                        Добавить
                    </button>
                </label>
                <div id="inp_1">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text del_inp">
                                <a href="#">
                                    X
                                </a>
                            </div>
                        </div>
                        <input class="form-control" id="inlineFormInputGroupUsername" placeholder="Введите вариант ответа" type="text">
                        </input>
                    </div>
                </div>
                <div id="inp_2">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text del_inp">
                                <a href="#">
                                    X
                                </a>
                            </div>
                        </div>
                        <input class="form-control" id="inlineFormInputGroupUsername" placeholder="Введите вариант ответа" type="text">
                        </input>
                    </div>
                </div>
                <div id="inp_3">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text del_inp">
                                <a href="#">
                                    X
                                </a>
                            </div>
                        </div>
                        <input class="form-control" id="inlineFormInputGroupUsername" placeholder="Введите вариант ответа" type="text">
                        </input>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                    Сохранить
                </button>
            </div>
        </div>
    </form>
</div>