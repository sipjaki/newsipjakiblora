@if (session('create'))
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session('create') }}
    </div>
@endif

@if (session('update'))
    <div class="alert-update">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session('update') }}
    </div>
@endif

@if (session('delete'))
    <div class="alert-delete">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session('delete') }}
    </div>
@endif





<style>
.alert {
    padding: 10px;
    background-color: navy; /* Warna biru */
    color: white;
    margin-bottom: 15px;
    margin-top: 15px;
    position: relative;
    font-size: 16px;
    border-radius: 25px 0px 25px 25px;
}

.alert .closebtn {
    position: absolute;
    top: 0;
    right: 10px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.alert .closebtn:hover {
    color: #000;
}

.alert-update {
    padding: 10px;
    background-color: green; /* Warna biru */
    color: white;
    margin-bottom: 15px;
    margin-top: 15px;
    position: relative;
    font-size: 16px;
    border-radius: 25px 0px 25px 25px;
}

.alert-update .closebtn {
    position: absolute;
    top: 0;
    right: 10px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.alert-update .closebtn:hover {
    color: #000;
}

.alert-delete {
    padding: 10px;
    background-color: red; /* Warna biru */
    color: white;
    margin-bottom: 15px;
    margin-top: 15px;
    position: relative;
    font-size: 16px;
    border-radius: 25px 0px 25px 25px;
}

.alert-delete .closebtn {
    position: absolute;
    top: 0;
    right: 10px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.alert-delete .closebtn:hover {
    color: #000;
}
</style>

{{-- ----------------------------------------------------------------------------- --}}
