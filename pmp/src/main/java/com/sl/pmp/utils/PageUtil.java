package com.sl.pmp.utils;

public class PageUtil {
	private int pagesize;  //页大小
	private int pageindex=1; //页码
	private int recordCount; //总记录数
	private int totalPagecount; //总页数
	
	//计算总页数
	public int  getTotalPagecount(){
		totalPagecount = recordCount%pagesize==0 ? recordCount/pagesize 
				:recordCount/pagesize+1;
		return totalPagecount;
	}
	
	//计算首页
	public int getFirstPage(){
	 	return pageindex =1;
	}
	
	//计算上一页
	public int getLastPage(){
		int i=pageindex;
		if (pagesize !=1){
			i=pagesize-1;
		}else{
			i=1;
		}
		return i;
	}
	
	//计算下一页
	public int  getNextpage(int totalPagecount){
		int i=pageindex;
		if (pageindex <totalPagecount){
			i=pageindex+1;
		}else{
			i=totalPagecount;
		}
		return i;
	}
	
	//计算末页
	public int getEndPage(){
		return pageindex=totalPagecount;
	}

	public int getPagesize() {
		return pagesize;
	}

	public void setPagesize(int pagesize) {
		this.pagesize = pagesize;
	}

	public int getPageindex() {
		return pageindex;
	}

	public void setPageindex(int pageindex) {
		this.pageindex = pageindex;
	}

	public int getRecordCount() {
		return recordCount;
	}

	public void setRecordCount(int recordCount) {
		this.recordCount = recordCount;
	}
 	
}
