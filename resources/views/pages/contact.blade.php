@extends('layouts.app')

@section('title', 'Request Clearance')
@section('description', 'Submit a clearance request to access classified inventory across the Umbrella Research Division archive.')

@section('content')
<section class="section-shell pt-12 pb-12" aria-labelledby="contact-heading">
    <div class="container-tech">
        @include('partials.breadcrumb', ['items' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Request Clearance'],
        ]])

        <div class="grid gap-10 lg:grid-cols-12 mt-8 items-end">
            <div class="lg:col-span-7 flex flex-col gap-5">
                <span class="section-heading-eyebrow" data-animate="fade-up">Access Control</span>
                <h1 id="contact-heading" data-animate="fade-up">Request Clearance</h1>
                <p class="text-[#9CACAD] max-w-xl" data-animate="fade-up">
                    Submit your credentials and intended access tier. Manual review will be performed by Internal Affairs Division. Response time depends on requested clearance level.
                </p>
            </div>

            <div class="lg:col-span-5 technical-panel" data-animate="panel">
                <p class="font-classified text-[0.7rem] tracking-[0.3em] text-[#9CACAD]">PROTOCOL ACTIVE</p>
                <p class="text-[#FFFFFF] mt-3 text-sm">
                    All submissions are recorded and audited. Provide accurate justification — fictional and academic context only.
                </p>
            </div>
        </div>

        <span class="hairline-red block mt-12" data-animate="line"></span>
    </div>
</section>

<section class="section-shell pt-2 pb-24">
    <div class="container-tech grid gap-12 lg:grid-cols-12 items-start">
        <form
            action="#"
            method="POST"
            class="lg:col-span-8 flex flex-col gap-5"
            aria-labelledby="contact-form-heading"
            data-animate="fade-up"
            onsubmit="event.preventDefault();"
        >
            <h2 id="contact-form-heading" class="text-xl tracking-[0.18em]">Clearance Request Form</h2>

            <div class="grid gap-5 sm:grid-cols-2">
                <div class="flex flex-col">
                    <label for="full-name" class="input-label">
                        <x-tabler-user-shield class="size-3.5 text-[#ED1C24] inline-block mr-1 -mt-0.5" aria-hidden="true" />
                        Full Name
                    </label>
                    <input type="text" id="full-name" name="full-name" class="input-control" placeholder="J. Wesker" autocomplete="name" required />
                </div>

                <div class="flex flex-col">
                    <label for="email" class="input-label">
                        <x-tabler-id-badge-2 class="size-3.5 text-[#ED1C24] inline-block mr-1 -mt-0.5" aria-hidden="true" />
                        Email
                    </label>
                    <input type="email" id="email" name="email" class="input-control" placeholder="agent@umbrella.corp" autocomplete="email" required />
                </div>

                <div class="flex flex-col">
                    <label for="department" class="input-label">
                        <x-tabler-building class="size-3.5 text-[#ED1C24] inline-block mr-1 -mt-0.5" aria-hidden="true" />
                        Department
                    </label>
                    <select id="department" name="department" class="input-control" required>
                        <option value="">Select department</option>
                        <option>Bioengineering</option>
                        <option>Pharmaceutical Research</option>
                        <option>Containment Systems</option>
                        <option>Private Security</option>
                        <option>Corporate Oversight</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="clearance" class="input-label">
                        <x-tabler-shield-lock class="size-3.5 text-[#ED1C24] inline-block mr-1 -mt-0.5" aria-hidden="true" />
                        Requested Clearance
                    </label>
                    <select id="clearance" name="clearance" class="input-control" required>
                        <option value="">Select level</option>
                        <option>Level 1 — Clear</option>
                        <option>Level 2 — Standby</option>
                        <option>Level 3 — Nominal</option>
                        <option>Level 4 — Restricted</option>
                        <option>Level 5 — Critical / Biohazard</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col">
                <label for="reason" class="input-label">
                    <x-tabler-clipboard-list class="size-3.5 text-[#ED1C24] inline-block mr-1 -mt-0.5" aria-hidden="true" />
                    Reason for Access
                </label>
                <textarea id="reason" name="reason" rows="6" class="input-control" placeholder="Provide narrative justification for archive access. Academic and fictional context only."></textarea>
                <p class="input-helper">All submissions are reviewed manually. Avoid sensitive personal information.</p>
            </div>

            <label for="agree" class="flex items-start gap-3 mt-2 text-sm text-[#9CACAD] cursor-pointer">
                <input type="checkbox" id="agree" name="agree" class="checkbox-control mt-1" required />
                <span>
                    I agree to Umbrella internal protocol and acknowledge this submission is part of a fictional academic ecommerce project.
                </span>
            </label>

            <div class="flex flex-col sm:flex-row gap-3 mt-2">
                <button type="submit" class="btn btn-primary">
                    <x-tabler-fingerprint class="size-4" aria-hidden="true" />
                    Submit Clearance Request
                </button>
                <button type="reset" class="btn btn-ghost">
                    <x-tabler-x class="size-4" aria-hidden="true" />
                    Clear Form
                </button>
            </div>

            <p class="font-classified text-[0.7rem] tracking-[0.24em] text-[#5D6E6E] mt-2">
                Form is presented for visual purposes. No data is transmitted.
            </p>
        </form>

        <aside class="lg:col-span-4 flex flex-col gap-5" data-animate="panel">
            <div class="clearance-panel">
                <div class="clearance-panel-header">
                    <span class="font-display text-[0.7rem] tracking-[0.3em] text-[#FFFFFF]">Clearance Request Protocol</span>
                    <x-tabler-id-badge-2 class="size-4 text-[#ED1C24]" aria-hidden="true" />
                </div>
                <dl class="grid gap-3 text-sm">
                    <div class="flex items-center justify-between">
                        <dt class="font-classified text-[0.7rem] tracking-[0.22em] text-[#9CACAD]">Response Time</dt>
                        <dd class="text-[#FFFFFF]">Pending</dd>
                    </div>
                    <div class="flex items-center justify-between">
                        <dt class="font-classified text-[0.7rem] tracking-[0.22em] text-[#9CACAD]">Status</dt>
                        <dd class="text-[#ED1C24]">Manual Review Required</dd>
                    </div>
                    <div class="flex items-center justify-between">
                        <dt class="font-classified text-[0.7rem] tracking-[0.22em] text-[#9CACAD]">Channel</dt>
                        <dd class="text-[#FFFFFF]">Internal Use Only</dd>
                    </div>
                </dl>
            </div>

            <div class="technical-panel">
                <p class="font-classified text-[0.7rem] tracking-[0.3em] text-[#9CACAD]">Submission Steps</p>
                <ol class="mt-4 flex flex-col gap-3 text-sm">
                    <li class="flex items-start gap-3">
                        <span class="font-display text-[#ED1C24] text-sm">01</span>
                        <span class="text-[#FFFFFF]">Provide credentials and department of record.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="font-display text-[#ED1C24] text-sm">02</span>
                        <span class="text-[#FFFFFF]">Justify access tier with narrative context.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="font-display text-[#ED1C24] text-sm">03</span>
                        <span class="text-[#FFFFFF]">Await internal review confirmation.</span>
                    </li>
                </ol>
            </div>

            <div class="border border-[#5D6E6E]/25 p-5">
                <p class="font-classified text-[0.7rem] tracking-[0.3em] text-[#ED1C24]">Notice</p>
                <p class="text-sm text-[#9CACAD] mt-2">
                    Submissions related to real-world harm, weapons or illegal activity are rejected automatically. All requests must remain inside the fictional Umbrella narrative scope.
                </p>
            </div>
        </aside>
    </div>
</section>
@endsection
