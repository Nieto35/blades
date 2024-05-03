<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vistas', function () {
    return view('vistas');
});

Route::get('/vistas/signature', function () {
    return view('erp.employee.signature');
});

Route::get('/vistas/invoice', function () {
    return view('html-to-pdf.invoice');
});

Route::get('/vistas/needs_assessment', function () {
    return view('html-to-pdf.needs_assessment');
});

Route::get('/vistas/payroll', function () {
    return view('html-to-pdf.payroll');
});

Route::get('/vistas/registration', function () {
    return view('mail.carer.registration');
});

Route::get('/vistas/welcome', function () {
    return view('mail.carer.welcome');
});

Route::get('/vistas/carer_available_update_plain', function () {
    return view('mail.crm.carers.carer_available_update_plain');
});

Route::get('/vistas/carer_available_update', function () {
    return view('mail.crm.carers.carer_available_update');
});

Route::get('/vistas/recruiter-profile-mail', function () {
    return view('mail.crm.carers.recruiter-profile-mail');
});

Route::get('/vistas/issued_invoice', function () {
    return view('mail.invoices.issued_invoice');
});

Route::get('/vistas/accept', function () {
    return view('mail.needs_assessment.accept');
});

Route::get('/vistas/reject', function () {
    return view('mail.needs_assessment.reject');
});

Route::get('/vistas/reminder', function () {
    return view('mail.needs_assessment.reminder');
});

Route::get('/vistas/resend', function () {
    return view('mail.payroll.resend');
});

Route::get('/vistas/draft-created-employers-bihar', function () {
    return view('mail.payroll_batch.draft-created-employers-bihar');
});

Route::get('/vistas/draft-created-employers', function () {
    return view('mail.payroll_batch.draft-created-employers');
});

Route::get('/vistas/draft-created', function () {
    return view('mail.payroll_batch.draft-created');
});

Route::get('/vistas/draft-updated', function () {
    return view('mail.payroll_batch.draft-updated');
});

Route::get('/vistas/employer-registration-gathering-bihar', function () {
    return view('mail.procedures.employer-registration-gathering-bihar');
});

Route::get('/vistas/employer-registration-gathering', function () {
    return view('mail.procedures.employer-registration-gathering');
});

Route::get('/vistas/employer-registration-signature-bihar', function () {
    return view('mail.procedures.employer-registration-signature-bihar');
});

Route::get('/vistas/employer-registration-signature', function () {
    return view('mail.procedures.employer-registration-signature');
});

Route::get('/vistas/employer-registration-success-bihar', function () {
    return view('mail.procedures.employer-registration-success-bihar');
});

Route::get('/vistas/employer-registration-success', function () {
    return view('mail.procedures.employer-registration-success');
});

Route::get('/vistas/employment-registration-gathering-bihar', function () {
    return view('mail.procedures.employment-registration-gathering-bihar');
});

Route::get('/vistas/employment-registration-gathering', function () {
    return view('mail.procedures.employment-registration-gathering');
});

Route::get('/vistas/employment-registration-signature-bihar', function () {
    return view('mail.procedures.employment-registration-signature-bihar');
});

Route::get('/vistas/employment-registration-signature', function () {
    return view('mail.procedures.employment-registration-signature');
});

Route::get('/vistas/employment-registration-success-bihar', function () {
    return view('mail.procedures.employment-registration-success-bihar');
});

Route::get('/vistas/employment-registration-success', function () {
    return view('mail.procedures.employment-registration-success');
});

Route::get('/vistas/employment-termination-signature-bihar', function () {
    return view('mail.procedures.employment-termination-signature-bihar');
});

Route::get('/vistas/employment-termination-signature', function () {
    return view('mail.procedures.employment-termination-signature');
});

Route::get('/vistas/employment-termination-success-bihar', function () {
    return view('mail.procedures.employment-termination-success-bihar');
});

Route::get('/vistas/employment-termination-success', function () {
    return view('mail.procedures.employment-termination-success');
});

Route::get('/vistas/employment-variation-signature-bihar', function () {
    return view('mail.procedures.employment-variation-signature-bihar');
});

Route::get('/vistas/employment-variation-signature', function () {
    return view('mail.procedures.employment-variation-signature');
});

Route::get('/vistas/employment-variation-success-bihar', function () {
    return view('mail.procedures.employment-variation-success-bihar');
});

Route::get('/vistas/employment-variation-success', function () {
    return view('mail.procedures.employment-variation-success');
});

Route::get('/vistas/procedure-approve', function () {
    return view('mail.procedures.procedure-approve');
});

Route::get('/vistas/procedure-reject', function () {
    return view('mail.procedures.procedure-reject');
});

Route::get('/vistas/procedure-reminder-mail-data-gathering', function () {
    return view('mail.procedures.procedure-reminder-mail-data-gathering');
});

Route::get('/vistas/procedure-reminder-mail', function () {
    return view('mail.procedures.procedure-reminder-mail');
});

Route::get('/vistas/procedure-sad', function () {
    return view('mail.procedures.procedure-sad');
});

Route::get('/vistas/mail', function () {
    return view('mail.profile_submission.mail');
});

Route::get('/vistas/profile', function () {
    return view('mail.profile_submission.profile');
});

Route::get('/vistas/new', function () {
    return view('mail.quote.new');
});

Route::get('/vistas/paid', function () {
    return view('mail.quote.paid');
});

Route::get('/vistas/paidSAD', function () {
    return view('mail.quote.paidSAD');
});

Route::get('/vistas/sad', function () {
    return view('mail.quote.sad');
});

Route::get('/vistas/call_request', function () {
    return view('mail.system.call_request');
});

Route::get('/vistas/service_closed_alert', function () {
    return view('mail.system.service_closed_alert');
});

Route::get('/vistas/service_paused_alert', function () {
    return view('mail.system.service_paused_alert');
});

Route::get('/vistas/carers', function () {
    return view('mail.carers');
});

Route::get('/vistas/errorCreateFamily', function () {
    return view('mail.errorCreateFamily');
});




