@extends('layout.master')
@section('konten')
<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Nama Siswa
						</th>
						<th>
							Kelas
						</th>
						<th>
							Jurusan
						</th>
						<th>
							Wali kelas
						</th>
					</tr>
				</thead>
				<tbody>
					@php $no=1; @endphp
					@foreach($a as $tab)
					<tr>
						<td>
							{{$no++}}
						</td>
						<td>
							{{$tab->Nama}}
						</td>
						<td>
							{{$tab->Kelas}}
						</td>
						<td>
							{{$tab->Jurusan}}
						</td>
						<td>
							{{$tab->Wali_Kelas}}
						</td>
					</tr>
					@endforeach
					
				</body>
			</table> 
			@endsection