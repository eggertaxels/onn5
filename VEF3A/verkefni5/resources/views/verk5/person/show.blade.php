@extends('verk5.layouts.master')

@section('title')
  Person
@endsection

@section('list')
  <?php $id = $id-1; ?>
  <img src="<?= $persons[$id][1]; ?>">
  <li><?= $persons[$id][0]; ?></li>
  <li><?= $persons[$id][2]; ?></li>
  <li><?= $persons[$id][3]; ?></li>
  <li><?= $persons[$id][4]; ?></li>
@endsection