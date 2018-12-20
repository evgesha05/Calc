<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text bg-light border-dark">
            Число a:
        </div>
    </div>
    <input type="number" step="any" class="form-control rounded-right border-dark" name="a" id="a" placeholder="Число a" value="{{$a}}" required>
 </div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text bg-light border-dark">
            Число b:
        </div>
    </div>
    <input type="number" step="any" class="form-control rounded-right border-dark" name="b" id="b" placeholder="Число b" value="{{$b}}" required>
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text bg-light border-dark">
            Число c:
        </div>
    </div>
    <input type="number" step="any" class="form-control rounded-right border-dark" name="c" id="c" placeholder="Число c" value="{{$c}}" required>
</div>
<button type="submit" name="calculate" class="btn btn-light border-dark btn-block">Вычислить</button>
