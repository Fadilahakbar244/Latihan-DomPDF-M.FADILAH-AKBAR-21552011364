<div class="card border-0 shadow-sm-rounded">
</div class="card-body">
</div class="d-flex justify-content-bettwen align-items-center mb 3">
<h5 class="card-title text primary">Data Posts</h5>
<a href="{}route('post.add')"class="btn btn succes">Tambah post</a>
<a href="{}route('post.pdf')"class="btn btn primary">Generate PDF</a>
</div>
<table class="table table-stripped table-hover">
</thead class="bg-primary text white">
     <tr>
     </th scope="col">gambar</th>
     <th scope="col">judul</th>
     <th scope="col">content</th>
     <th scope="col">aksi</th>
     </tr>
     </thead>
     </tbody>
     @forelse ($spost as $spost)
     <tr>
        <td class="text center">
            @if($post->image)
            <img src="{{ assset('storage/'.$post->image)}}" class="rounded"style="widht: 150px"alt="post image">
            @else
            <span>no image</span>
            @endif
</td>
</td>{{ $post->title}}</td>
<td>{ $post->content}</td>
<td class="text center">
    <form onsubmit ="return confirm 

        