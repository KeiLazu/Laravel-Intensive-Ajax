<div class="panel-body">
  <div class="table">
    <table class="table table-bordered table-striped table-responsive">
      <thead>
        <tr>
          <th>Title</th>
          <th>Container</th>
        </tr>
      </thead>

      <tbody>
        @foreach($todolist as $data)
          <tr>
            <td>{!! $data->title !!}</td>
            <td>{!! $data->container !!}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>