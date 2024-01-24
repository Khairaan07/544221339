<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Menu Makanan</h4>
						<p class="card-description">Tambahkan Menu Makanan</p>
						<form action="{{ route('foodmenu.store') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="productname">Nama</label>
								<input
									type="text"
									class="form-control"
									id="productname"
									name="productname"
									placeholder="Nama menu"
									required
								/>
							</div>

							<div class="form-group">
								<label for="productprice">Harga</label>
								<input
									type="number"
									class="form-control"
									id="productprice"
									name="productprice"
									placeholder="Masukkan Harga"
									pattern="[0-9]+([\.,][0-9]+)?"
									step="0.01"
									repuired
								/>
							</div>

							<div class="form-group">
								<label>Upload Gambar</label>
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="Upload Gambar Menu"
										id="productimage"
										name="productimage"
										required
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempproductimage" src="#" alt="temp-uploded-img" class="h-auto shadow-sm w-1/2" style="display: none" />
							</div>

							<div class="form-group">
								<label for="productdescription">Deskripsi</label>
								<textarea
									class="form-control"
									id="productdescription"
									name="productdescription"
									rows="4"
									required
									placeholder="Deskripsi Tambahan"
								></textarea>
							</div>

							@if ($isAdmin === true)
							<button type="submit" class="btn btn-primary mr-2">Tambahkan</button>
							@else
							<button onclick="alert('Only admin can add food menu')" type="button" class="btn btn-primary mr-2">Add</button>
							@endif
							<a href="{{ route("foodmenu.index") }}" class="btn btn-light">Batalkan</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var imgInput = document.getElementById("productimage");
		imgInput.addEventListener('change', (event) => {
			if (event.target.files[0]) {
        var reader = new FileReader();

				var imgTemp = document.getElementById("tempproductimage");
        reader.onload = function (e) {
        	imgTemp.setAttribute("src", e.target.result);
        }

        reader.readAsDataURL(event.target.files[0]);

        if (imgTemp.style.display === "inline") {
			    imgTemp.style.display = "block";
			  } else {
			    imgTemp.style.display = "inline";
			  }
	    }
		});

	</script>
</x-admin.index>
