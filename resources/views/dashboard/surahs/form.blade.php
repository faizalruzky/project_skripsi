        <div class="x_panel">
                <div class="x_content">
                    <br />
        <div class="form-group" >
            {!! Form::label("nama_surat", "Nama Surat:") !!}
            {!! Form::text("nama_surat", null, ["class" => "form-control"]) !!}

            {!! Form::label("arab_surat", "Arab Surat:") !!}
            {!! Form::text("arab_surat", null, ["class" => "form-control"]) !!}

            {!! Form::label("arti_surat", "Arti Surat:") !!}
            {!! Form::text("arti_surat", null, ["class" => "form-control"]) !!}

        </div>
            

        <div class="form-actions">
            <button type="submit" name="submit" class="btn btn-primary">{!! $submitText !!}</button>
        </div>
        </div>
        </div>


