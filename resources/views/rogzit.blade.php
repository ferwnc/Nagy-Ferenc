<div class="container bg-success text-white mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Töltse ki az űrlapot!</h1>
        </div>
    </div>
</div>  
<br>
<div class="container bg-info text-dark">
    <div class="row">
        <div class="col-12">
            <form method="POST">
                @csrf
              
                <div class="mt-3 mb-3">
                    <label for="vnev">Vezetéknév: </label>
                    <input type="text" name="vnev" value="{{old('vnev')}}" id="vnev" class="form-control">

                </div>
                
                
                <div class="mt-3 mb-3">
                    <label for="knev">Keresztnév: </label>
                    <input type="text" name="knev" value="{{old('knev')}}" id="knev" class="form-control">

                </div>

                
                <div class="mt-3 mb-3">
                    <label for="szev">Születési év: </label>
                    <input type="number" name="szev" value="{{old('szev')}}" id="szev" class="form-control">

                </div>
               

                <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-light">Bekerülök a rendszerbe</button>
                </div>
           
            </form>
        </div>
    </div>
</div>