/**
* @api {get} /employee/:id/entitlement 5.Get Employee Leave Entitlement
* @apiName employeeLeaveEntitlement
* @apiGroup Leave
* @apiVersion 0.1.0
*
* @apiParam {Number} id Employee id.
* @apiParam {String} [leaveType] Leave type.
* @apiParam {Date} fromDate From date.
* @apiParam {Date} toDate To date.
*
* @apiSuccess {Number} id Entitlement id.
* @apiSuccess {String} type Leave type.
* @apiSuccess {Date} validFrom Valid from date.
* @apiSuccess {Date} validTo Valid to date.
* @apiSuccess {Number} days Entitled days.
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
*
*        {
*        "data": [
*        {
*        "id": "2",
*        "type": "Annual",
*        "validFrom": "2017-01-01 ",
*        "validTo": "2018-02-28 ",
*        "days": "10.0"
*        }
*        ],
*        "rels": []
*        }
*
*
* @apiError No-Records Found.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 404 Record Not Found
*     {
*       "error": ["No Records Found"]
*     }
*
*
* @apiError Employee Not Found.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 404 Employee Not Found
*     {
*       "error": ["Employee Not Found"]
*     }
*/
