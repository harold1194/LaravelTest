@extends('layouts.front')

@section('content')
    <main class="container clear"> 
    <!-- main body --> 
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_third first"><a href="#"><img src="{{ asset('hardwork/images/demo/gallery/profile.jpg') }}" alt=""></a></div>
      <div class="two_third">
        <p class="heading btmspace-80">Integer varius enim id augue faucibus mattis. Pellentesque scelerisque nibh eu mi convallis, ac feugiat nulla tincidunt. Aenean et cursus arcu, a adipiscing justo.</p>
        <ul class="nospace group">
          <li class="one_half first btmspace-80">
            <article class="service largeicon"><i class="icon nobg circle fa fa-ambulance"></i>
              <h6 class="heading"><a href="#">Lorem Ipsum Dolor</a></h6>
              <p>Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet.</p>
            </article>
          </li>
          <li class="one_half btmspace-80">
            <article class="service largeicon"><i class="icon nobg circle fa fa-h-square"></i>
              <h6 class="heading"><a href="#">Lorem Ipsum Dolor</a></h6>
              <p>Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet.</p>
            </article>
          </li>
          <li class="one_half first">
            <article class="service largeicon"><i class="icon nobg circle fa fa-hospital-o"></i>
              <h6 class="heading"><a href="#">Lorem Ipsum Dolor</a></h6>
              <p>Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet.</p>
            </article>
          </li>
          <li class="one_half">
            <article class="service largeicon"><i class="icon nobg circle fa fa-stethoscope"></i>
              <h6 class="heading"><a href="#">Lorem Ipsum Dolor</a></h6>
              <p>Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet.</p>
            </article>
          </li>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ --> 
    <!-- / main body -->
    <div class="clear"></div>
  </main>
@endsection