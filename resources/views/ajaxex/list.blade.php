<div class="panel-body">
  <div class="table">
    <table class="table table-bordered table-striped table-responsive">
      <thead>
        <tr>
          <th>Title</th>
          <th>Container</th>
          <th><button class="btn btn-primary btn-sm">Create</button></th>
        </tr>
      </thead>

      <tbody>
        @foreach($todolist as $data)
          <tr>
            <td>{!! $data->title !!}</td>
            <td>{!! $data->container !!}</td>
            <td><button class="btn btn-primary btn-sm">Edit</button></td>
            <td><button class="btn btn-primary btn-sm">Delete</button></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>