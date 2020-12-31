<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Daniel Mwambala
 * Description: Groups(Over, Major and Item) model class
 */
class Invoice_Model extends CI_Model 
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
        $this->selected = $this->Login_Model->get_active_rvc();
    }

	//Saving invoice data 
    public function insertInvoiceControl($data)
    {
        if ($this->db->insert('INVOICE_CONTROL', $data)) {
            return true;
        } else {
            return false;
        }
	}

    public function closeSelectedInvoice($PRODUCT, $data, $acc_entry_data, $acc_entry_vat_data, $acc_entry_supplier_data){

        $this->db->where('REQ_ITEM_ID',$PRODUCT);

        if ($this->db->update('REQUEST_ITEM', $data)) 
        {
            $this->db->insert('ACC_ENTRY', $acc_entry_data);
            $this->db->insert('ACC_ENTRY', $acc_entry_vat_data);
            $this->db->insert('ACC_ENTRY', $acc_entry_supplier_data);
            return true;          

        } else {
           return false;
        }
       
    }

    public function closed_items()
    {        
        $this->db->select('*');
        $this->db->from('STOCK_ENTRY');
        $this->db->join('REQUEST_ITEM', 'REQUEST_ITEM.REQUEST_ID = STOCK_ENTRY.REQ_ID');
        $this->db->join('PRODUCT', 'PRODUCT.PRODUCT_ID = REQUEST_ITEM.PRODUCTS');
        $this->db->join('SUPPLIERS', 'SUPPLIERS.SUPPLIER_ID = REQUEST_ITEM.SUPPLIER');
        $this->db->join('BASE_UNITS', 'BASE_UNITS.BUNIT_ID = PRODUCT.BASE_UNIT');
        $this->db->join('UNITS', 'UNITS.UNIT_ID = PRODUCT.STORE_UNIT');
        $this->db->join('REQUISITION', 'REQUISITION.REQUEST_ID = REQUEST_ITEM.REQUEST_ID');
        $this->db->join('XCED','XCED.XCED_ID = REQUISITION.REQUESTED_BY');
        $this->db->join('TAX_RATES','TAX_RATES.RATE_ID = REQUEST_ITEM.REC_VAT');
        $this->db->join('COST_CENTRE','COST_CENTRE.COST_CENTRE_ID = REQUISITION.COST_CENTER');

        $this->db->where('REQUEST_ITEM.ASSIGN_STATUS >', 1);
        /*$this->db->where('STOCK_ENTRY.RVC_SELECT', $this->selected);*/
        $this->db->distinct('STOCK_ENTRY.STK_ENTRY');


         return $this->db->get()->result();  
    }

    // This Funtion prints every invoice item to the pdf
    public function print_item_pdf($id)
    {        
        $this->db->select('*');
        $this->db->from('STOCK_ENTRY');
        $this->db->join('REQUEST_ITEM', 'REQUEST_ITEM.REQUEST_ID = STOCK_ENTRY.REQ_ID');
        $this->db->join('PRODUCT', 'PRODUCT.PRODUCT_ID = REQUEST_ITEM.PRODUCTS');
        $this->db->join('SUPPLIERS', 'SUPPLIERS.SUPPLIER_ID = REQUEST_ITEM.SUPPLIER');
        $this->db->join('BASE_UNITS', 'BASE_UNITS.BUNIT_ID = PRODUCT.BASE_UNIT');
        $this->db->join('UNITS', 'UNITS.UNIT_ID = PRODUCT.STORE_UNIT');
        $this->db->join('REQUISITION', 'REQUISITION.REQUEST_ID = REQUEST_ITEM.REQUEST_ID');
        $this->db->join('XCED','XCED.XCED_ID = REQUISITION.REQUESTED_BY');
        $this->db->join('TAX_RATES','TAX_RATES.RATE_ID = REQUEST_ITEM.REC_VAT');
        $this->db->join('COST_CENTRE','COST_CENTRE.COST_CENTRE_ID = REQUISITION.COST_CENTER');

        $this->db->where('REQUEST_ITEM.ASSIGN_STATUS >', 1);
        $this->db->where('STOCK_ENTRY.STK_ID', $id);
        /*$this->db->where('STOCK_ENTRY.RVC_SELECT', $this->selected);*/
        $this->db->distinct('STOCK_ENTRY.STK_ENTRY');


         return $this->db->get()->result();  
    }

    public function trialBalance_items(){

        $this->db->select('*');
        $this->db->from('REQUEST_ITEM');
        $this->db->join('PRODUCT', 'PRODUCT.PRODUCT_ID = REQUEST_ITEM.PRODUCTS');
        $this->db->join('ITEM_GROUP', 'ITEM_GROUP.IG_ID = PRODUCT.ITEM_GROUP');
        $this->db->join('MAJOR_GROUP', 'MAJOR_GROUP.MG_ID = ITEM_GROUP.IG_MAJOR_GROUP');
        $this->db->join('OVER_GROUP', 'OVER_GROUP.OG_ID = MAJOR_GROUP.OVER_GROUP');
        $this->db->join('SUPPLIERS', 'SUPPLIERS.SUPPLIER_ID = REQUEST_ITEM.SUPPLIER');
        $this->db->join('PRICE_QUOTES', 'PRICE_QUOTES.ARTICLE = PRODUCT.PRODUCT_ID');
        $this->db->join('BASE_UNITS', 'BASE_UNITS.BUNIT_ID = PRODUCT.BASE_UNIT');
        $this->db->join('UNITS', 'UNITS.UNIT_ID = PRODUCT.STORE_UNIT');
        $this->db->join('REQUISITION', 'REQUISITION.REQUEST_ID = REQUEST_ITEM.REQUEST_ID');
        $this->db->join('XCED','XCED.XCED_ID = REQUISITION.REQUESTED_BY');
        $this->db->join('TAX_RATES','TAX_RATES.RATE_ID = REQUEST_ITEM.REC_VAT');
        $this->db->join('COST_CENTRE','COST_CENTRE.COST_CENTRE_ID = REQUISITION.COST_CENTER');

        $this->db->where('REQUEST_ITEM.ASSIGN_STATUS >', 2);
        /*$this->db->where('REQUEST_ITEM.RVC_SELECT', $this->selected);*/

         return $this->db->get()->result();  
    }

}

?>