function afterSubmitEvent(response, postdata)
{
  //Parses the JSON response that comes from the server.
  result = JSON.parse(response.responseText);
  //result.success is a boolean value, if true the process continues,
  //if false an error message appear and all other processing is stopped,
  //result.message is ignored if result.success is true.
  return [result.success, result.message];
}
