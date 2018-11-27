@extends('layouts.left_panel')
@section('left-menu')
    <div class="accordion" id="accordionTest">
        <div class="card nsc-card-left-menu">
            <div class="card-header nsc-head-left-menu" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn nsc-btn-left-menu" type="button" data-toggle="collapse" data-target="#collapseTest" aria-expanded="true" aria-controls="collapseTest">
                    Test
                    </button>
                </h5>
            </div>
            <div id="collapseTest" class="collapse" aria-labelledby="headingOne" data-parent="#accordionTest">
                <div class="card-body">
                    <section-menu-item item-name="test.test" inner-text="Resumen"></section-menu-item>
                </div>
            </div>
        </div>
    </div>
@endsection
