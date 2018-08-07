@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
                <span class="card-title">Invoices</span>
                <a href="{{ route('invoices.create') }}" class="btn btn-success float-right">Create</a>
        </div>
  

    </div>

    <div class="card-body">
        @if($invoices->count())
            <table class="table table-striped">
                <thead>
                    <th>Invoice No.</th>
                    <th>Grand Total</th>
                    <th>Client</th>
                    <th>Invoice Date</th>
                    <th>Due Date</th>
                    <th colspan="2">Created At</th>
                </thead>
                <tbody>
                <tr>
                    @foreach($invoices as $invoice)
                    <tr>
                        <td>{{ $invoice->invoice_no }}</td>
                        <td>{{ $invoice->grand_total }}</td>
                        <td>{{ $invoice->client }}</td>
                        <td>{{ $invoice->invoice_date }}</td>
                        <td>{{ $invoice->due_date }}</td>
                        <td>{{ $invoice->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tr>
                </tbody>
            </table>

        @else
            <div class="invoice-empty">
                <p class="invoice-empty-title">
                    No Invoices were created.
                    <a href="{{ route('invoice.create') }}">Create Now!</a>
                </p>
            </div>
        @endif
    </div>


@endsection