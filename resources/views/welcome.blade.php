@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')


<section class="w3-padding w3-container">


    @foreach ($projects as $project)

    <div class="project-container">
        <div class="project-card">
                @if ($project->image)
                    <div class="project-image">
                        <a href="{{$project->url}}" target="_blank">
                            <img src="{{asset('storage/'.$project->image)}}" width="200">
                        </a>
                    </div>
                @endif

            <div class="project-title">
                {{$project->title}}
            </div>

            <div className="projectLink">
                <a href="{{$project->url}}"   target="_blank">
                    <img src="{{asset('storage/live.gif')}}" width="20">
                </a>

            <a href="{{$project->slug}}"  target="_blank">
                <img src="{{asset('storage/github.gif')}}" width="20">
            </a>
          </div>



        </div>


    </div>    





        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                

            </div>
            
            @if ($project->image)
                <div class="w3-container w3-margin-top">
                    <img src="{{asset('storage/'.$project->image)}}" width="200">
                </div>
            @endif

            <div class="w3-container w3-padding">

                @if ($project->url)
                    View Project: <a href="{{$project->url}}">{{$project->url}}</a>
                @endif

                <p>
                    Posted: {{$project->created_at->format('M j, Y')}}
                    <br>
                    Type1: {{$project->type->title}}
                </p>

                <a href="/project/{{$project->slug}}" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    @endforeach

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 111.222.3333
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

</section>

@endsection
