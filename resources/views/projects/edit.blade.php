@extends ('layout.console')
@extends ('layout.sideNav')
@section ('content')

<section class="w3-padding">
<div class="container">
    <h2 class="title">Edit Project</h2>

    <form method="post" action="/console/projects/edit/{{$project->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title', $project->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="{{old('url', $project->url)}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug" value="{{old('slug', $project->slug)}}" required>

            @if ($errors->first('slug'))
                <br>
                <span class="w3-text-red">{{$errors->first('slug')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="subtitle">Subtitle:</label>
            <textarea name="subtitle" id="subtitle" required>{{old('subtitle', $project->subtitle)}}</textarea>

            @if ($errors->first('subtitle'))
                <br>
                <span class="w3-text-red">{{$errors->first('subtitle')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content1">Content_1:</label>
            <textarea name="content1" id="content1" required>{{old('content1')}}</textarea>

            @if ($errors->first('content1'))
                <br>
                <span class="w3-text-red">{{$errors->first('content1')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content2">Content_2:</label>
            <textarea name="content2" id="content2" required>{{old('content2')}}</textarea>

            @if ($errors->first('content2'))
                <br>
                <span class="w3-text-red">{{$errors->first('content2')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content3">Content_3:</label>
            <textarea name="content3" id="content3" required>{{old('content3')}}</textarea>

            @if ($errors->first('content3'))
                <br>
                <span class="w3-text-red">{{$errors->first('content3')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="type_id">Type:</label>
            <select name="type_id" id="type_id">
                <option></option>
                @foreach($types as $type)
                    <option value="{{$type->id}}"
                        {{$type->id == old('type_id', $project->type_id) ? 'selected' : ''}}>
                        {{$type->title}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('type_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('type_id')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="stack1">Stack_1:</label>
            <input type="text" name="stack1" id="stack1" value="{{old('stack1', $project->stack1)}}" required>
            @if ($errors->first('stack1'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack1')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="stack2">Stack_2:</label>
            <input type="text" name="stack2" id="stack2" value="{{old('stack2', $project->stack2)}}" required>

            @if ($errors->first('stack2'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack2')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="stack3">Stack_3:</label>
            <input type="text" name="stack3" id="stack3" value="{{old('stack3', $project->stack3)}}" required>

            @if ($errors->first('stack3'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack3')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="stack4">Stack_4:</label>
            <input type="text" name="stack4" id="stack4" value="{{old('stack4', $project->stack4) }}" required>

            @if ($errors->first('stack4'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack4')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="stack5">Stack_5:</label>
            <input type="text" name="stack5" id="stack5" value="{{old('stack5', $project->stack5) }}" required>

            @if ($errors->first('stack5'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack5')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="stack6">Stack_6:</label>
            <input type="text" name="stack6" id="stack6" value="{{old('stack6', $project->stack6) }}" required>

            @if ($errors->first('stack6'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack6')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="stack7">Stack_7:</label>
            <input type="text" name="stack7" id="stack7" value="{{old('stack7', $project->stack7) }}" required>

            @if ($errors->first('stack7'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack7')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="stack8">Stack_8:</label>
            <input type="text" name="stack8" id="stack8" value="{{old('stack8', $project->stack8) }}" required>

            @if ($errors->first('stack8'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack8')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="stack9">Stack_9:</label>
            <input type="text" name="stack9" id="stack9" value="{{old('stack9', $project->stack9) }}" required>

            @if ($errors->first('stack9'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack9')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="stack10">Stack_10:</label>
            <input type="text" name="stack10" id="stack10" value="{{old('stack10', $project->stack10) }}" required>

            @if ($errors->first('stack10'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack10')}}</span>
            @endif
        </div>


       

        <button type="submit" class="addBtn">Edit Project</button>

    </form>

    <a href="/console/projects/list">Back to Project List</a>
    </div>
</section>

@endsection


<style>
.title {
    font-size: 36px;
    font-weight: bold;
    text-align: center;
    margin-top: 1em;
    margin-bottom: 1em;
    color: #00263b;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
}

.container {
    min-width: 81%;
    max-width: 83%;
    margin-left: 15em;
    background-color: white;
    padding: 1em;
    border-radius: 15px;
}
form{
    text-align: center;
}
.addBtn {
  padding: 12px 24px;
  font-size: 16px;
  font-weight: bold;
  letter-spacing: 2px;
  border: 2px solid #007bff;
  color: #007bff;
  background-color: transparent;
  text-align: center;
  text-decoration: none;
  transition: all 0.3s ease;
  border-radius:15px;
}

.addBtn:hover {
  background-color: #007bff;
  color: #fff;
}

a {
    color: #f44336;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>
