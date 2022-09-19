<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HousingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'category' => $this->category,
            'city' => $this->city,
            'status' => $this->status,
            'name' => $this->name,
            'description' => $this->description,
            'max_floor' => $this->max_floor,
            'star' => $this->star,
            'contact_person' => $this->contact_person,
            'phone' => $this->phone,
            'alt_phone' => $this->alt_phone,
            'represent_management' => $this->represent_management,
            'company_name' => $this->company_name,
            'address' => $this->address,
            'alt_address' => $this->alt_address,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'postal_code' => $this->postal_code,
            'cancel_fine_day' => $this->cancel_fine_day,
            'required_pay' => $this->required_pay,
            'parking' => $this->parking,
            'parking_property' => $this->parking_property,
            'parking_location' => $this->parking_location,
            'parking_booking' => $this->parking_booking,
            'parking_price' => $this->parking_price,
            'breakfast' => $this->breakfast,
            'children_allowed' => $this->children_allowed,
            'pet' => $this->pet,
            'pet_charge' => $this->pet_charge,
            'pet_price' => $this->pet_price,
            'check_in_from' => $this->check_in_from,
            'check_in_before' => $this->check_in_before,
            'check_out_from' => $this->check_out_from,
            'check_out_before' => $this->check_out_before,
            'pos_terminal' => $this->pos_terminal,
            'invoice_name' => $this->invoice_name,
            'invoice_company_name' => $this->invoice_company_name,
            'recipient_invoice' => $this->recipient_invoice,
            'recipient_invoice_city' => $this->recipientInvoiceCity,
            'recipient_invoice_address' => $this->recipient_invoice_address,
            'recipient_invoice_postal_code' => $this->recipient_invoice_postal_code,
            'created_at' => $this->created_at->format('d.m.Y'),
            'images' => $this->images
        ];
    }
}
