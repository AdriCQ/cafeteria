/**
 * -----------------------------------------
 *	Types
 * -----------------------------------------
 */

import { BaseService } from "./baseService";
import { $api } from "./_axios";

/**
 * Offer
 */
export interface IOffer {
    id: number;
    price: number;
    image?: string;
    title: string;
    description: string;
    active: boolean;
    special: boolean;
}
/**
 * Offer Request Store
 */
export type IOfferRequestStore = Omit<IOffer, "id">;
/**
 * Offer Request Update
 */
export type IOfferRequestUpdate = Partial<Omit<IOffer, "id">>;

/**
 * -----------------------------------------
 *	Service
 * -----------------------------------------
 */

export const OfferService = BaseService<
    IOffer,
    IOfferRequestStore,
    IOfferRequestUpdate
>($api, "offers");
