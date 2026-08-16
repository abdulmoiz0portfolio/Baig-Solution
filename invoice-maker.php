<?php 
$page_key = 'invoice-maker'; 
include 'header.php'; 
?>

<!-- Subpage Hero Section -->
<section class="subpage-hero text-center position-relative">
    <div class="container">
        <span class="badge bg-warm-peach text-accent-brand rounded-pill px-3 py-2 fw-semibold mb-3">
            <i class="fa-solid fa-file-invoice me-1"></i> Free Online Invoice Generator
        </span>
        <h1 class="display-4 fw-extrabold text-dark mb-3">Professional Invoice Maker</h1>
        <p class="lead text-secondary max-width-600 mx-auto">
            Create, customize, and export high-quality A4 PDF invoices instantly. Powered by live calculations and Automatixes design system.
        </p>
    </div>
</section>

<!-- Main Invoice Maker App -->
<div id="app" class="py-5 bg-light-subtle">
    <div class="container">
        <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 bg-white invoice-card">
            
            <!-- Top Control Bar (Screen Only) -->
            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom no-print">
                <div class="d-flex align-items-center gap-2">
                    <span class="fw-bold text-dark fs-5"><i class="fa-solid fa-sliders text-accent-brand me-2"></i>Invoice Options</span>
                </div>
                <div class="d-flex gap-2">
                    <button type="button" @click="resetForm" class="btn btn-outline-secondary rounded-pill px-3 py-2 btn-sm fw-semibold">
                        <i class="fa-solid fa-rotate-left me-1"></i> Reset
                    </button>
                    <button type="button" id="print-invoice-btn" @click="triggerPrint" class="btn btn-brand rounded-pill px-4 py-2 btn-sm fw-bold">
                        <i class="fa-solid fa-print me-1"></i> Print / Download PDF
                    </button>
                </div>
            </div>

            <!-- Printable Header Header Banner -->
            <div class="row align-items-start mb-4 pb-3 border-bottom header-row">
                <!-- Company Details (Left) -->
                <div class="col-md-7 mb-3 mb-md-0 position-relative">
                    <div class="d-flex align-items-center mb-3">
                        <img :src="company.logo" alt="Company Logo" class="me-2 rounded-3" style="width: 50px; height: 50px; object-fit: contain; border: 1px solid rgba(0,0,0,0.1); background: #fff;">
                        <div>
                            <input type="text" v-model="company.name" class="form-control form-control-lg fw-bold border-0 p-0 text-dark fs-4 company-name-input" placeholder="Company Name">
                            <input type="text" v-model="company.tagline" class="form-control border-0 p-0 text-muted small company-tagline-input" placeholder="Company Tagline">
                        </div>
                    </div>
                    <div class="ps-1 text-muted small">
                        <div class="d-flex align-items-center mb-1 no-print">
                            <i class="fa-solid fa-image text-accent-brand me-2" style="width: 14px;"></i>
                            <input type="text" v-model="company.logo" class="form-control form-control-sm border-0 p-0 text-secondary" placeholder="Logo Image URL">
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa-solid fa-location-dot text-accent-brand me-2 no-print" style="width: 14px;"></i>
                            <input type="text" v-model="company.address" class="form-control form-control-sm border-0 p-0 text-secondary company-address-input" placeholder="Company Address">
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa-solid fa-phone text-accent-brand me-2 no-print" style="width: 14px;"></i>
                            <input type="text" v-model="company.phone" class="form-control form-control-sm border-0 p-0 text-secondary company-phone-input" placeholder="Company Phone">
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa-solid fa-envelope text-accent-brand me-2 no-print" style="width: 14px;"></i>
                            <input type="email" v-model="company.email" class="form-control form-control-sm border-0 p-0 text-secondary company-email-input" placeholder="Company Email">
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-globe text-accent-brand me-2 no-print" style="width: 14px;"></i>
                            <input type="text" v-model="company.website" class="form-control form-control-sm border-0 p-0 text-secondary company-website-input" placeholder="Company Website">
                        </div>
                    </div>
                </div>

                <!-- Invoice Meta (Right) -->
                <div class="col-md-5 text-md-end">
                    <h2 class="fw-extrabold text-uppercase text-dark mb-3 tracking-wide">INVOICE</h2>
                    <div class="bg-light-subtle p-3 rounded-3 border d-inline-block text-start w-100 max-width-320">
                        <div class="row g-2 align-items-center mb-2">
                            <label class="col-5 col-form-label col-form-label-sm fw-semibold text-muted">Invoice #:</label>
                            <div class="col-7">
                                <input type="text" v-model="invoiceMeta.number" id="invoice-number-input" class="form-control form-control-sm fw-bold text-end" placeholder="INV-1001">
                            </div>
                        </div>
                        <div class="row g-2 align-items-center mb-2">
                            <label class="col-5 col-form-label col-form-label-sm fw-semibold text-muted">Date:</label>
                            <div class="col-7">
                                <input type="date" v-model="invoiceMeta.date" id="invoice-date-input" class="form-control form-control-sm text-end">
                            </div>
                        </div>
                        <div class="row g-2 align-items-center mb-2">
                            <label class="col-5 col-form-label col-form-label-sm fw-semibold text-muted">Due Date:</label>
                            <div class="col-7">
                                <input type="date" v-model="invoiceMeta.dueDate" id="invoice-duedate-input" class="form-control form-control-sm text-end">
                            </div>
                        </div>
                        <div class="row g-2 align-items-center">
                            <label class="col-5 col-form-label col-form-label-sm fw-semibold text-muted">Currency:</label>
                            <div class="col-7">
                                <select v-model="invoiceMeta.currency" id="currency-select" class="form-select form-select-sm fw-bold text-end">
                                    <option value="$">USD ($)</option>
                                    <option value="â‚¬">EUR (â‚¬)</option>
                                    <option value="Â£">GBP (Â£)</option>
                                    <option value="C$">CAD (C$)</option>
                                    <option value="Rs">PKR (Rs)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Client Info Section -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 border h-100">
                        <h6 class="fw-bold text-dark mb-2 text-uppercase tracking-wider small">
                            <i class="fa-solid fa-user-tag text-accent-brand me-1 no-print"></i> Billed To (Client):
                        </h6>
                        <div class="mb-2">
                            <input type="text" v-model="client.name" id="client-name-input" class="form-control form-control-sm fw-bold text-dark" placeholder="Client Contact Name">
                        </div>
                        <div class="mb-2">
                            <input type="text" v-model="client.company" id="client-company-input" class="form-control form-control-sm text-secondary" placeholder="Client Company Name">
                        </div>
                        <div class="mb-2">
                            <input type="text" v-model="client.address" id="client-address-input" class="form-control form-control-sm text-secondary" placeholder="Billing Address">
                        </div>
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="email" v-model="client.email" id="client-email-input" class="form-control form-control-sm text-secondary" placeholder="Client Email">
                            </div>
                            <div class="col-6">
                                <input type="text" v-model="client.phone" id="client-phone-input" class="form-control form-control-sm text-secondary" placeholder="Client Phone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Line Items Table -->
            <div class="table-responsive mb-4">
                <table class="table table-bordered align-middle">
                    <thead class="table-dark text-uppercase small">
                        <tr>
                            <th scope="col" style="width: 45%;">Service / Description</th>
                            <th scope="col" class="text-center" style="width: 15%;">Qty</th>
                            <th scope="col" class="text-end" style="width: 20%;">Unit Price ({{ invoiceMeta.currency }})</th>
                            <th scope="col" class="text-end" style="width: 20%;">Total ({{ invoiceMeta.currency }})</th>
                            <th scope="col" class="text-center no-print" style="width: 50px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in lineItems" :key="index" class="line-item-row">
                            <td>
                                <!-- Service Select Dropdown -->
                                <select v-model="item.serviceSelect" @change="handleServiceChange(item)" class="form-select form-select-sm service-select mb-1" :class="{ 'no-print': item.serviceSelect === 'custom' }">
                                    <option v-for="service in defaultServices" :key="service" :value="service">
                                        {{ service }}
                                    </option>
                                    <option value="custom">Custom Service...</option>
                                </select>
                                <!-- Custom Service / Detailed Description Input -->
                                <input type="text" v-model="item.customService" @input="handleServiceChange(item)" v-if="item.serviceSelect === 'custom'" class="form-control form-control-sm custom-service-input mt-1" placeholder="Enter custom service description...">
                            </td>
                            <td class="text-center">
                                <input type="number" min="1" step="1" v-model.number="item.quantity" class="form-control form-control-sm text-center qty-input">
                            </td>
                            <td>
                                <input type="number" min="0" step="0.01" v-model.number="item.price" class="form-control form-control-sm text-end price-input">
                            </td>
                            <td class="text-end fw-bold text-dark row-total">
                                {{ invoiceMeta.currency }} {{ formatMoney(item.quantity * item.price) }}
                            </td>
                            <td class="text-center no-print">
                                <button type="button" @click="removeLineItem(index)" :disabled="lineItems.length <= 1" class="btn btn-sm btn-outline-danger border-0 remove-line-btn" title="Remove Item">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Add Line Item Button (No Print) -->
            <div class="mb-4 no-print">
                <button type="button" id="add-line-item-btn" @click="addLineItem" class="btn btn-outline-brand rounded-pill btn-sm fw-semibold">
                    <i class="fa-solid fa-plus me-1"></i> Add Line Item
                </button>
            </div>

            <!-- Invoice Summary & Totals -->
            <div class="row align-items-start mb-4">
                <!-- Payment Notes / Terms (Left) -->
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="p-3 bg-light rounded-3 border h-100">
                        <h6 class="fw-bold text-dark mb-2 text-uppercase tracking-wider small">Notes & Payment Terms</h6>
                        <textarea v-model="notes" id="notes-input" class="form-control form-control-sm border-0 bg-transparent text-secondary" rows="4" placeholder="Enter payment instructions, bank details, or terms..."></textarea>
                    </div>
                </div>

                <!-- Totals Calculation Card (Right) -->
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 border">
                        <div class="d-flex justify-content-between align-items-center py-1 border-bottom">
                            <span class="fw-semibold text-secondary">Subtotal:</span>
                            <span class="fw-bold text-dark subtotal-display" id="subtotal-val">{{ invoiceMeta.currency }} {{ formatMoney(subtotal) }}</span>
                        </div>

                        <!-- Tax Input & Calculated Amount -->
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                            <div class="d-flex align-items-center gap-1">
                                <span class="fw-semibold text-secondary">Tax Rate (%):</span>
                                <input type="number" min="0" max="100" step="0.1" v-model.number="taxRate" id="tax-rate-input" class="form-control form-control-sm text-end" style="width: 70px;">
                            </div>
                            <span class="fw-bold text-dark tax-amount-display" id="tax-amount-val">+ {{ invoiceMeta.currency }} {{ formatMoney(taxAmount) }}</span>
                        </div>

                        <!-- Discount Input & Calculated Amount -->
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                            <div class="d-flex align-items-center gap-1">
                                <span class="fw-semibold text-secondary">Discount (%):</span>
                                <input type="number" min="0" max="100" step="0.1" v-model.number="discountRate" id="discount-rate-input" class="form-control form-control-sm text-end" style="width: 70px;">
                            </div>
                            <span class="fw-bold text-success discount-amount-display" id="discount-amount-val">- {{ invoiceMeta.currency }} {{ formatMoney(discountAmount) }}</span>
                        </div>

                        <!-- Grand Total -->
                        <div class="d-flex justify-content-between align-items-center pt-3 mt-1">
                            <span class="fw-extrabold text-dark fs-5">Grand Total:</span>
                            <span class="fw-extrabold text-accent-brand fs-4 grand-total-display" id="grand-total-val">{{ invoiceMeta.currency }} {{ formatMoney(grandTotal) }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Sign-off / Thank you -->
            <div class="text-center pt-4 border-top text-muted small mt-2">
                <p class="mb-0 fw-semibold">Thank you for your business!</p>
                <p class="mb-0 text-secondary">If you have any questions regarding this invoice, please contact <a href="mailto:contact@automatixes.com" class="text-accent-brand text-decoration-none">contact@automatixes.com</a></p>
            </div>

            <!-- Watermark Footer (Print Only) -->
            <div class="invoice-watermark mt-5 pt-3 border-top text-center" style="display: none;">
                    Invoice Generated by <strong>Automatixes</strong> | <i class="fa-solid fa-globe me-1"></i> automatixes.com | <i class="fa-solid fa-phone me-1"></i> +92 336 6920141
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Custom Page & Print Stylesheet -->
<style>
/* Custom styling for Invoice Maker */
.invoice-card {
    border-radius: 20px !important;
}

.tracking-wide {
    letter-spacing: 2px;
}

.tracking-wider {
    letter-spacing: 1px;
}

.max-width-320 {
    max-width: 320px;
}

.btn-outline-brand {
    color: #3B82F6;
    border-color: #3B82F6;
    background-color: transparent;
}
.btn-outline-brand:hover {
    color: #ffffff;
    background-color: #3B82F6;
    border-color: #3B82F6;
}

.text-accent-brand {
    color: #3B82F6 !important;
}

/* Print Styles */
@media print {
    /* Hide non-printable components */
    header,
    #header-sticky,
    footer,
    .footer-area,
    #sticky-expert-btn,
    .newsletter-modal,
    #preloader,
    .mouse-cursor,
    .no-print,
    .subpage-hero,
    .btn,
    .n8n-chat,
    .chat-layout,
    .chat-wrapper,
    .chat-window-wrapper {
        display: none !important;
    }

    .invoice-watermark {
        display: block !important;
        position: fixed;
        bottom: 20px;
        left: 0;
        right: 0;
        text-align: center;
    }

    @page {
        size: A4;
        margin: 10mm 12mm;
    }

    body {
        background: #ffffff !important;
        color: #000000 !important;
        font-size: 11pt;
        padding: 0 !important;
        margin: 0 !important;
    }

    #app, .py-5, .bg-light-subtle {
        padding: 0 !important;
        background: transparent !important;
    }

    .container {
        max-width: 100% !important;
        width: 100% !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    .invoice-card {
        box-shadow: none !important;
        border: none !important;
        padding: 0 !important;
        background: #ffffff !important;
    }

    /* Transform input and select controls into borderless printed text */
    .form-control,
    .form-select {
        border: none !important;
        background: transparent !important;
        box-shadow: none !important;
        padding: 0 !important;
        color: #000000 !important;
        font-weight: 500;
        appearance: none !important;
        -webkit-appearance: none !important;
        font-size: 11pt !important;
    }

    .form-select {
        background-image: none !important;
    }

    .table {
        border-color: #cccccc !important;
    }

    .table th, .table td {
        background: transparent !important;
        border-color: #e0e0e0 !important;
        padding: 6px 4px !important;
    }

    .table-dark {
        background-color: #f0f0f0 !important;
        color: #000000 !important;
        border-color: #cccccc !important;
    }

    .bg-light, .bg-light-subtle {
        background-color: #fcfcfc !important;
        border-color: #e5e5e5 !important;
    }
}
</style>

<!-- Vue 3 CDN -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<!-- Vue 3 App Logic -->
<script>
    const { createApp, ref, computed } = Vue;

    createApp({
        setup() {
            // 1. Company Information (Pre-filled, Editable)
            const company = ref({
                logo: 'assets/img/logo/icon_light.jpg',
                name: 'Automatixes',
                tagline: 'Empowering Businesses with AI & Automation',
                address: 'Remote / Worldwide',
                phone: '+92 336 6920141',
                email: 'contact@automatixes.com',
                website: 'https://automatixes.com'
            });

            // 2. Client Details (Editable)
            const client = ref({
                name: 'Acme Corporation',
                company: 'Acme Corp Inc.',
                address: '123 Business Way, Suite 100, New York, NY 10001',
                email: 'billing@acmecorp.com',
                phone: '+1 (555) 019-2834'
            });

            // 3. Invoice Meta
            const todayStr = new Date().toISOString().split('T')[0];
            const defaultDue = new Date();
            defaultDue.setDate(defaultDue.getDate() + 14);
            const dueStr = defaultDue.toISOString().split('T')[0];

            const invoiceMeta = ref({
                number: 'INV-1001',
                date: todayStr,
                dueDate: dueStr,
                currency: '$'
            });

            // 4. Default Core Services
            const defaultServices = [
                'Autonomous AI Agents',
                'AI Automations (n8n/Make)',
                'Web & App Development',
                'UI/UX Design',
                'Commercial Product Shoot',
                'Support & Maintenance'
            ];

            // 5. Reactive Line Items Table Data
            const lineItems = ref([
                {
                    serviceSelect: 'Autonomous AI Agents',
                    customService: '',
                    description: 'Autonomous AI Agents',
                    quantity: 1,
                    price: 1500.00
                },
                {
                    serviceSelect: 'AI Automations (n8n/Make)',
                    customService: '',
                    description: 'AI Automations (n8n/Make)',
                    quantity: 2,
                    price: 750.00
                }
            ]);

            // 6. Tax and Discount Rates (%)
            const taxRate = ref(5);
            const discountRate = ref(0);

            // 7. Payment Notes / Terms
            const notes = ref('Thank you for working with Automatixes! Payment is due within 14 days.');

            // Helper to update service description
            const handleServiceChange = (item) => {
                if (item.serviceSelect !== 'custom') {
                    item.description = item.serviceSelect;
                } else {
                    item.description = item.customService || '';
                }
            };

            // Add new line item row
            const addLineItem = () => {
                lineItems.value.push({
                    serviceSelect: 'Autonomous AI Agents',
                    customService: '',
                    description: 'Autonomous AI Agents',
                    quantity: 1,
                    price: 500.00
                });
            };

            // Remove line item row (minimum 1 row protected)
            const removeLineItem = (index) => {
                if (lineItems.value.length > 1) {
                    lineItems.value.splice(index, 1);
                }
            };

            // Computed Properties for Live Math Calculations
            const subtotal = computed(() => {
                return lineItems.value.reduce((sum, item) => {
                    const qty = Number(item.quantity) || 0;
                    const prc = Number(item.price) || 0;
                    return sum + (qty * prc);
                }, 0);
            });

            const taxAmount = computed(() => {
                const rate = Number(taxRate.value) || 0;
                return subtotal.value * (rate / 100);
            });

            const discountAmount = computed(() => {
                const rate = Number(discountRate.value) || 0;
                return subtotal.value * (rate / 100);
            });

            const grandTotal = computed(() => {
                return subtotal.value + taxAmount.value - discountAmount.value;
            });

            // Currency formatting helper
            const formatMoney = (val) => {
                const num = Number(val) || 0;
                return num.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            };

            // Window Print Trigger
            const triggerPrint = () => {
                window.print();
            };

            // Form Reset Helper
            const resetForm = () => {
                client.value = { name: '', company: '', address: '', email: '', phone: '' };
                invoiceMeta.value = {
                    number: 'INV-1001',
                    date: todayStr,
                    dueDate: dueStr,
                    currency: '$'
                };
                lineItems.value = [
                    {
                        serviceSelect: 'Autonomous AI Agents',
                        customService: '',
                        description: 'Autonomous AI Agents',
                        quantity: 1,
                        price: 1000.00
                    }
                ];
                taxRate.value = 0;
                discountRate.value = 0;
            };

            return {
                company,
                client,
                invoiceMeta,
                defaultServices,
                lineItems,
                taxRate,
                discountRate,
                notes,
                handleServiceChange,
                addLineItem,
                removeLineItem,
                subtotal,
                taxAmount,
                discountAmount,
                grandTotal,
                formatMoney,
                triggerPrint,
                resetForm
            };
        }
    }).mount('#app');
</script>

<?php include 'footer.php'; ?>

