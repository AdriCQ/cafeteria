import { $api } from "./_axios";
import { BaseService } from "./baseService";
/**
 * -----------------------------------------
 *	Types
 * -----------------------------------------
 */

/**
 * Event Model
 */
export interface IEvent {
    id: number;
    image?: string;
    title: string;
    description: string;
    date?: string;
    active: boolean;
}
/**
 * Event Store Request
 */
export type IEventRequestStore = Omit<IEvent, "id">;
/**
 * Event Update Request
 */
export type IEventRequestUpdate = Partial<IEventRequestStore>;

/**
 * -----------------------------------------
 *	Service
 * -----------------------------------------
 */

/**
 * EventService
 */
export const EventService = BaseService<
    IEvent,
    IEventRequestStore,
    IEventRequestUpdate
>($api, "events");
